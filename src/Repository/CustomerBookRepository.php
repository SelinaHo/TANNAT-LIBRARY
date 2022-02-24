<?php

namespace App\Repository;

use App\Entity\CustomerBook;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CustomerBook|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomerBook|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomerBook[]    findAll()
 * @method CustomerBook[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomerBookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CustomerBook::class);
    }

    // /**
    //  * @return CustomerBook[] Returns an array of CustomerBook objects
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
    public function findOneBySomeField($value): ?CustomerBook
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
