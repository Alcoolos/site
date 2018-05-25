<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.something = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function findallyouneed(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM produit p
            ORDER BY p.notemoy DESC
            LIMIT 5
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function findFromTo16($offset): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM produit p
            ORDER BY p.name
            LIMIT 16 OFFSET :offset
            ';

        $params['offset'] = $offset;
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function findFromTo18($offset): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM produit p
            ORDER BY p.name
            LIMIT 18 OFFSET :offset
            ';

        $params['offset'] = $offset;
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function findall(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM produit p
            ORDER BY p.name
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }



    public function countAlcool()
    {
        return $this->createQueryBuilder('p')
            ->select('COUNT(p)')
            ->getQuery()
            ->getSingleScalarResult();
        ;
    }




}
