<?php

namespace App\Repository;

use App\Entity\UserArmy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserArmy|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserArmy|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserArmy[]    findAll()
 * @method UserArmy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserArmyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserArmy::class);
    }

    // /**
    //  * @return UserArmy[] Returns an array of UserArmy objects
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
    public function findOneBySomeField($value): ?UserArmy
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
