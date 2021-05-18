<?php

namespace App\Repository;

use App\Entity\Teamer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Teamer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Teamer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Teamer[]    findAll()
 * @method Teamer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Teamer::class);
    }
}
