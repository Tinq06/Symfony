<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ExtraController extends Controller
{

  public function musicAction(Request $request){
    return $this->render('OCPlatformBundle:Extra:music.html.twig');
  }

  public function backgroundAction($id, Request $request){
    if($id==0){
      return $this->render('OCPlatformBundle:Extra:background.html.twig');
    }
    else{
      $session=$request->getSession();
      $session->set('backgroundId',$id);

      return $this->render('OCPlatformBundle:Extra:background.html.twig');
    }
  }

}
