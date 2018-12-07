<?php
/**
 * Created by PhpStorm.
 * User: hemery
 * Date: 2018-12-06
 * Time: 18:30
 */

namespace App\Repository;


use App\Entity\Genre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class GenreRepository extends ServiceEntityRepository {
    public function __construct(RegistryInterface $registry) {
        parent::__construct($registry, Genre::class);
    }

}