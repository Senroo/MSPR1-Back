<?php

namespace App\Repository;

use App\Entity\Slider;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Slider|null find($id, $lockMode = null, $lockVersion = null)
 * @method Slider|null findOneBy(array $criteria, array $orderBy = null)
 * @method Slider[]    findAll()
 * @method Slider[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SliderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Slider::class);
    }

    /**
     * @param $orderKey
     * @param $otherOrderKey
     * @return Slider[] Returns an array of Artist objects ordered by name
     */
    public function findAllOrderedBy($orderKey, $otherOrderKey): array
    {
        return $this->createQueryBuilder('a')
            ->addorderBy('a.'.$orderKey, 'ASC')
            ->addOrderBy('a.'.$otherOrderKey, 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }


    /*public function findOneById($value):
    {
        try {
            return $this->createQueryBuilder('s')
                ->andWhere('s.id = :val')
                ->setParameter('val', $value)
                ->getQuery()
                ->getOneOrNullResult();
        } catch (NonUniqueResultException $e) {
        }
    }*/

}
