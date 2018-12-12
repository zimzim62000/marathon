<?php

namespace App\Repository;

use App\Entity\Lecture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Lecture|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lecture|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lecture[]    findAll()
 * @method Lecture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LectureRepository extends ServiceEntityRepository {
    public function __construct(RegistryInterface $registry) {
        parent::__construct($registry, Lecture::class);
    }

    public function findAllGreaterThanNumSequence(User $user, Histoire $histoire, $numSequence): array {
        $qb = $this->createQueryBuilder('l')
            ->andWhere('l.user = :user')
            ->andWhere('l.histoire = :histoire')
            ->andWhere('l.numSequence > :numSequence')
            ->setParameter('user', $user)
            ->setParameter('histoire', $histoire)
            ->setParameter('numSequence', $numSequence)
            ->getQuery();

        return $qb->execute();
    }

    // /**
    //  * @return Lecture[] Returns an array of Lecture objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lecture
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
