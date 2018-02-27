<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\Skill;
use OC\PlatformBundle\Entity\AdvertSkill;

class AdvertController extends Controller
{

  public function indexAction($page)
  {
    if ($page < 1) {
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }

    // Pour récupérer la liste de toutes les annonces : on utilise findAll()
    $listAdverts = $this->getDoctrine()
      ->getManager()
      ->getRepository('OCPlatformBundle:Advert')
      ->getAdverts()
    ;

    // L'appel de la vue ne change pas
    return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
      'listAdverts' => $listAdverts,
    ));
  }

  public function viewAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

      if (null === $advert) {
        throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
      }

      $listApplications = $em->getRepository('OCPlatformBundle:Application')
        ->findBy(array('advert' => $advert));

      $listAdvertSkills = $em->getRepository('OCPlatformBundle:AdvertSkill')
        ->findBy(array('advert' => $advert));

      return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
        'advert' => $advert,
        'listApplications' =>$listApplications,
        'listAdvertSkills' => $listAdvertSkills
      ));
    }

  public function addAction(Request $request)
  {
    /*$antispam = $this->container->get('oc_platform.antispam');

    $text = '.454545545..';
    if ($antispam->isSpam($text)) {
      throw new \Exception('Votre message a été détecté comme spam !');
    }*/

    // Création de l'entité Advert
       $advert = new Advert();
       $advert->setTitle('Recherche développeur Symfony.');
       $advert->setAuthor('Alexandre');
       $advert->setContent("Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…");
       $advert->setMailAuthor("tinq06@gmail.com");

       // Création d'une première candidature
       $application1 = new Application();
       $application1->setAuthor('Marine');
       $application1->setContent("J'ai toutes les qualités requises.");

       // Création d'une deuxième candidature par exemple
       $application2 = new Application();
       $application2->setAuthor('Pierre');
       $application2->setContent("Je suis très motivé.");

       // Création de l'entité Image
       $image = new Image();
       $image->setUrl('https://www.w3schools.com/w3css/img_fjords.jpg');
       $image->setAlt('Job nul');

       // On lie les candidatures à l'annonce
       $application1->setAdvert($advert);
       $application2->setAdvert($advert);

       $advert->setImage($image);

       // On récupère l'EntityManager
       $em = $this->getDoctrine()->getManager();

       // On récupère toutes les compétences possibles
       $listSkills = $em->getRepository('OCPlatformBundle:Skill')->findAll();

        // Pour chaque compétence
        foreach ($listSkills as $skill) {
          // On crée une nouvelle « relation entre 1 annonce et 1 compétence »
          $advertSkill = new AdvertSkill();

          // On la lie à l'annonce, qui est ici toujours la même
          $advertSkill->setAdvert($advert);
          // On la lie à la compétence, qui change ici dans la boucle foreach
          $advertSkill->setSkill($skill);

          // Arbitrairement, on dit que chaque compétence est requise au niveau 'Expert'
          $advertSkill->setLevel('Expert');

          // Et bien sûr, on persiste cette entité de relation, propriétaire des deux autres relations
          $em->persist($advertSkill);
        }

       // Étape 1 : On « persiste » l'entité
       $em->persist($advert);

       // Étape 1 ter : pour cette relation pas de cascade lorsqu'on persiste Advert, car la relation est
       // définie dans l'entité Application et non Advert. On doit donc tout persister à la main ici.
       $em->persist($application1);
       $em->persist($application2);

       // Étape 2 : On « flush » tout ce qui a été persisté avant
       $em->flush();

       $fakeemail = $this->container->get('oc_platform.service.fakeemail');
       $message=$fakeemail->getFakeEmail();


    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :

    // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
    if ($request->isMethod('POST')) {
      // Ici, on s'occupera de la création et de la gestion du formulaire

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      // Puis on redirige vers la page de visualisation de cettte annonce
      return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
    }

    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('OCPlatformBundle:Advert:add.html.twig',array('advert'=>$advert,'message'=>$message));
  }

  public function listAction()
  {
    $listAdverts = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Advert')
      ->getAdvertWithApplications();

    foreach ($listAdverts as $advert) {
      // Ne déclenche pas de requête : les candidatures sont déjà chargées !
      // Vous pourriez faire une boucle dessus pour les afficher toutes
    $advert->getApplications();
    }
  }

  public function editAction($id, Request $request)
  {
    // Ici, on récupérera l'annonce correspondante à $id
    $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }
    //Gestion formulaire

    if ($request->isMethod('POST')) {
         $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

         return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
    }

     return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
       'advert' => $advert
     ));
  }

  public function deleteAction($id)
  {
    $em = $this->getDoctrine()->getManager();
    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    foreach ($advert->getCategories() as $category) {
      $advert->removeCategory($category);
    }

    $em->flush();

    return $this->render('OCPlatformBundle:Advert:delete.html.twig');
  }

  public function menuAction($limit = 1)
  {

    // Ici, on récupérera la liste des annonces, puis on la passera au template
    // Notre liste d'annonce en dur
    $em = $this->getDoctrine()->getManager();
    $listAdverts = $em->getRepository('OCPlatformBundle:Advert')->findBy(
      array(),
      array('date'=>'DESC'),
      $limit,
      0
  );

    return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
      // Tout l'intérêt est ici : le contrôleur passe
      // les variables nécessaires au template !
      'listAdverts' => $listAdverts
    ));
  }

}
