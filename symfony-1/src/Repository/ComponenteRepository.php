<?php

namespace App\Repository;

use App\Entity\Componente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Componente>
 *
 * @method Componente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Componente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Componente[]    findAll()
 * @method Componente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComponenteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Componente::class);
    }

//    /**
//     * @return Componente[] Returns an array of Componente objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Componente
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
