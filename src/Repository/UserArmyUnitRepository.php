<?php

namespace App\Repository;

use App\Entity\UserArmyUnit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserArmyUnit|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserArmyUnit|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserArmyUnit[]    findAll()
 * @method UserArmyUnit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserArmyUnitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserArmyUnit::class);
    }

    // /**
    //  * @return UserArmyUnit[] Returns an array of UserArmyUnit objects
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
    public function findOneBySomeField($value): ?UserArmyUnit
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
