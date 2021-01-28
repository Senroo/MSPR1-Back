<?php

namespace App\Repository;

use App\Entity\ConcertPlanning;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ConcertPlanning|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConcertPlanning|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConcertPlanning[]    findAll()
 * @method ConcertPlanning[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConcertPlanningRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConcertPlanning::class);
    }

    // /**
    //  * @return ConcertPlanning[] Returns an array of ConcertPlanning objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ConcertPlanning
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
