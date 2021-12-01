<?php

namespace App\Repository;

use App\Entity\Enseingnant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Enseingnant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enseingnant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enseingnant[]    findAll()
 * @method Enseingnant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnseingnantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enseingnant::class);
    }

    // /**
    //  * @return Enseingnant[] Returns an array of Enseingnant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Enseingnant
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
