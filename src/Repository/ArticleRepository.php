<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    /**
     * @param int $limit
     * @return Article[]
     */
    public function findLastArticle(int $page, int $length): array
    {
        $qb = $this->createQueryBuilder("article");

        $qb ->join("article.category", "category")
            ->orderBy("article.createdAt", "DESC")
            ->setFirstResult(($page - 1)* $length)
            ->setMaxResults($length);

        return $qb->getQuery()->getResult();
    }

    public function countArticle()
    {
        return $this->createQueryBuilder("article")
            ->select("COUNT(article.id)")
            ->getQuery()
            ->getSingleScalarResult();
    }// il faut utiliser le select pour faire fonctionner le singleScalarResult autrement il ne sait pas quoi on doit selectionner. 

}

