<?php

namespace App\Repository;

use App\Entity\MapMarker;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MapMarker|null find($id, $lockMode = null, $lockVersion = null)
 * @method MapMarker|null findOneBy(array $criteria, array $orderBy = null)
 * @method MapMarker[]    findAll()
 * @method MapMarker[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MapMarkerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MapMarker::class);
    }

    /**
     * @param $orderKey
     * @return MapMarker[] Returns an array of Artist objects ordered by name
     */
    public function findAllOrderedBy($orderKey): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.'.$orderKey, 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function countAll() {
        return $this->createQueryBuilder('a')
            ->select('count(a.id)')
            ->getQuery()
            ->getSingleScalarResult()
            ;
    }

    /*
    public function findOneBySomeField($value): ?MapMarker
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
