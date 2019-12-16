<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;
use App\Entity\Category;
use App\Form\ArticleType;
use App\Service\Slugger;
use App\Repository\ArticleRepository;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     * @param ArticleRepository $repo
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function article(ArticleRepository $repo, Request $request)
    {
        // $repo = $this->getDoctrine()->getRepository(Article::class); PAS BESOIN DE CETTE LIGNE CAR APPEL DU REPO ARTICLE EN PARAMETRE

        $article = $repo->findLastArticle((int) $request->query->get("page", 1), 4);

        return $this->render('article/article.html.twig', [
            'controller_name' => 'ArticleController',
            'title' => "Last news from WAB Project",
            'articles' => $article,
            'totalArticles' => $repo->countArticle()
        ]);
    }
    
    /** 
     * @Route("/article/new", name="article_create")
     * @Route("/article/{slug}/edit", name="article_edit")
     * @IsGranted("ROLE_ADMIN")
     */
    public function form(Article $article = null, Request $request, Slugger $slugger, ObjectManager $manager) {
        if(!$article) {
            $article = new Article();
        }

        // APPEL DU ARTICLETYPE
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form["image"]->getData();

            if ($imageFile) {
                $filename = uniqid() . "." . $imageFile->guessExtension();
                $imageFile->move($this->getParameter("upload_dir"), $filename);
                $article->setImage($filename);
            }

            $article->setSlug($slugger->slugify($article->getTitle()));

            $manager->persist($article);
            $manager->flush();

            return $this->redirectToRoute('article_show', ['slug' => $article->getSlug()]);
        }

        return $this->render('article/create.html.twig', [
            'formArticle' => $form->createView(),
            'editMode' => $article->getId() !== null
        ]);
    }

    /** 
     * @Route("/article/{slug}", name="article_show")
     */
    //public function show(ArticleRepository $repo, $id)
    public function show(Article $article)
    {
        /* $repo = $this->getDoctrine()->getRepository(Article::class);  PAS BESOIN DE LA LIGNE CAR APPEL DU REPO ARTICLE EN PARAMETRE

        $article = $repo->find($id);
        */

        return $this->render('article/show.html.twig', [
            'article' => $article
        ]);
    }
}
