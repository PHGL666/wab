<?php

namespace App\Repository;

use App\Entity\UnitCategoryHasUnitLimit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UnitCategoryHasUnitLimit|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnitCategoryHasUnitLimit|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnitCategoryHasUnitLimit[]    findAll()
 * @method UnitCategoryHasUnitLimit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnitCategoryHasUnitLimitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UnitCategoryHasUnitLimit::class);
    }

    // /**
    //  * @return UnitCategoryHasUnitLimit[] Returns an array of UnitCategoryHasUnitLimit objects
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
    public function findOneBySomeField($value): ?UnitCategoryHasUnitLimit
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
