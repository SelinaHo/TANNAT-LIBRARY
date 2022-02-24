<?php

namespace App\Repository;

use App\Entity\RentingHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RentingHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method RentingHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method RentingHistory[]    findAll()
 * @method RentingHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RentingHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RentingHistory::class);
    }

    // /**
    //  * @return RentingHistory[] Returns an array of RentingHistory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RentingHistory
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
