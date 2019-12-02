<?php

namespace App\Repository;

use App\Entity\UnitLimit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UnitLimit|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnitLimit|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnitLimit[]    findAll()
 * @method UnitLimit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnitLimitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UnitLimit::class);
    }

    // /**
    //  * @return UnitLimit[] Returns an array of UnitLimit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UnitLimit
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
