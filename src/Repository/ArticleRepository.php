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

    ///**
    // * @param int $limit
    // * @return Article[]
    // */
    /*
    public function findLastArticle(int $page, int $length, int $limit = 3): array
    {
        $qb = $this->createQueryBuilder("article");

        $qb ->join("article.category", "category")
            ->orderBy("article.createdAt", "DESC")
            ->setFirstResult(($page - 1)* $length)
            ->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }
    */

    // /**
    // * @return Article[]
    // */
    /*
    public function findLast(int $limit = 6): array
    {
        $qb = $this->createQueryBuilder("article");

        $qb->select("article", "article.category")
            ->innerJoin("article.category", "category")
            ->orderBy("article.createdAt", "DESC")
            ->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }
*/
    // /**
    //  * @return Article[] Returns an array of Article objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */


    /*
    public function findOneBySomeField($value): ?Article
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

