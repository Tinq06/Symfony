<?php

namespace OC\PlatformBundle\Repository;

/**
 * AdvertRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdvertRepository extends \Doctrine\ORM\EntityRepository
{

  public function myFindAll()
  {
    // Méthode 1 : en passant par l'EntityManager
    $queryBuilder = $this->_em->createQueryBuilder()
      ->select('a')
      ->from($this->_entityName, 'a')
    ;
    // Dans un repository, $this->_entityName est le namespace de l'entité gérée
    // Ici, il vaut donc OC\PlatformBundle\Entity\Advert

    // Méthode 2 : en passant par le raccourci (je recommande)
    $queryBuilder = $this->createQueryBuilder('a');

    // On n'ajoute pas de critère ou tri particulier, la construction
    // de notre requête est finie

    // On récupère la Query à partir du QueryBuilder
    $query = $queryBuilder->getQuery();

    // On récupère les résultats à partir de la Query
    $results = $query->getResult();

    // On retourne ces résultats
    return $results;
  }

  public function myFindOne($id){
    $queryBuilder = $this->createQueryBuilder('a');
    $queryBuilder->where('a.id= :id')->setParameter('id',$id);

    return $queryBuilder->getQuery()->getResult();
  }

  public function getAdverts(){
      $query = $this->createQueryBuilder('a')
        // Jointure sur l'attribut image
        ->leftJoin('a.image', 'i')
        ->addSelect('i')
        // Jointure sur l'attribut categories
        ->leftJoin('a.categories', 'c')
        ->addSelect('c')
        ->orderBy('a.date', 'DESC')
        ->getQuery()
      ;

      return $query->getResult();
    }

  public function findByAuthorAndDate($author,$year){
    $qb = $this->createQueryBuilder('a');
    $qb->where('a.author=:author')
       ->andwhere('a.date < :year')
       ->orderBy('a.date','DESC')
       ->setParameter('author',$author)
       ->setParameter('year',$year);

    return $qb->getQuery()->getResult();
  }

  public function whereCurrentYear(QueryBuilder $qb)
  {
    $qb
      ->andWhere('a.date BETWEEN :start AND :end')
      ->setParameter('start', new \Datetime(date('Y').'-01-01'))  // Date entre le 1er janvier de cette année
      ->setParameter('end',   new \Datetime(date('Y').'-12-31'))  // Et le 31 décembre de cette année
    ;
  }

  public function myFind(){
    $qb = $this->createQueryBuilder('a');

    // On peut ajouter ce qu'on veut avant
    $qb
      ->where('a.author = :author')
      ->setParameter('author', 'Marine');

    // On applique notre condition sur le QueryBuilder
    $this->whereCurrentYear($qb);

    // On peut ajouter ce qu'on veut après
    $qb->orderBy('a.date', 'DESC');

    return $qb->getQuery()->getResult();
  }

  public function getAdvertWithApplications()
  {
    $qb = $this->createQueryBuilder('a')
      ->leftJoin('a.applications', 'app')
      ->addSelect('app');

    return $qb->getQuery()->getResult();
  }

  public function getAdvertWithCategories(array $categoryNames){
    $qb = $this->createQueryBuilder('a')
      ->innerJoin('a.categories', 'c')
      ->addSelect('c');

      $qb->where($qb->expr()->in('c.names', ':categoryNames'))
      ->setParameter('categoryNames', $categoryNames);

    return $qb->getQuery()->getResult();
  }

}
