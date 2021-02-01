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

    /**
     * @param $orderKey
     * @return ConcertPlanning[] Returns an array of Artist objects ordered by name
     */
    public function findAllOrderedBy($orderKey): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.'.$orderKey, 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

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
