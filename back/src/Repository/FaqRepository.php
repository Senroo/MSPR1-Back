<?php

namespace App\Repository;

use App\Entity\Faq;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Faq|null find($id, $lockMode = null, $lockVersion = null)
 * @method Faq|null findOneBy(array $criteria, array $orderBy = null)
 * @method Faq[]    findAll()
 * @method Faq[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FaqRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Faq::class);
    }

    /**
     * @param $orderKey
     * @return Faq[] Returns an array of Artist objects ordered by name
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
    public function findOneBySomeField($value): ?Faq
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
