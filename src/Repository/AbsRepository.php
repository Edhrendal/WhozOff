<?php

namespace App\Repository;

use App\Entity\Abs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Abs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Abs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Abs[]    findAll()
 * @method Abs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Abs::class);
    }
}
