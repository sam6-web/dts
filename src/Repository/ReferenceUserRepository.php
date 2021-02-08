<?php

namespace App\Repository;

use App\Entity\ReferenceUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReferenceUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReferenceUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReferenceUser[]    findAll()
 * @method ReferenceUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReferenceUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReferenceUser::class);
    }

    // /**
    //  * @return ReferenceUser[] Returns an array of ReferenceUser objects
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

    
    /* public function findOneBySomeField($value): ?ReferenceUser
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    } */
   
}
