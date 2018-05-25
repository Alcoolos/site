<?php

namespace App\Repository;

use App\Entity\Notes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class NotesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Notes::class);
    }


    public function findByProduct($alcool)
    {
        return $this->createQueryBuilder('note')
            ->where('note.produit_id = :value')->setParameter('value', $alcool)
            ->getQuery()
            ->getResult()
        ;
    }



}
