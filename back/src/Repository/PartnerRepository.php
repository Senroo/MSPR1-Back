<?php

namespace App\Repository;

use App\Entity\Partner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Partner|null find($id, $lockMode = null, $lockVersion = null)
 * @method Partner|null findOneBy(array $criteria, array $orderBy = null)
 * @method Partner[]    findAll()
 * @method Partner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartnerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Partner::class);
    }

    /**
     * @param $orderKey
     * @return Partner[] Returns an array of Artist objects ordered by name
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
    public function findOneBySomeField($value): ?Partner
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
