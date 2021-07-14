<?php

namespace App\Repository;

use App\Entity\LightSensor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LightSensor|null find($id, $lockMode = null, $lockVersion = null)
 * @method LightSensor|null findOneBy(array $criteria, array $orderBy = null)
 * @method LightSensor[]    findAll()
 * @method LightSensor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LightSensorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LightSensor::class);
    }

    // /**
    //  * @return LightSensor[] Returns an array of LightSensor objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LightSensor
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
