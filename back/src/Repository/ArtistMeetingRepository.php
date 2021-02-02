<?php

namespace App\Repository;

use App\Entity\ArtistMeeting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArtistMeeting|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArtistMeeting|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArtistMeeting[]    findAll()
 * @method ArtistMeeting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtistMeetingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArtistMeeting::class);
    }

    /**
     * @param $orderKey
     * @return ArtistMeeting[] Returns an array of Artist objects ordered by name
     */
    public function findAllOrderedBy($orderKey): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.'.$orderKey, 'ASC')
            ->leftJoin('a.artist', 'artm')
            ->addSelect('artm')
            ->getQuery()
            ->getResult()
            ;
    }

    /*
    public function findOneBySomeField($value): ?ArtistMeeting
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
