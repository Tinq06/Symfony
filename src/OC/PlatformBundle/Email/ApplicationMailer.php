<?php
// src/OC/PlatformBundle/Email/ApplicationMailer.php

namespace OC\PlatformBundle\Email;

use OC\PlatformBundle\Entity\Application;

class ApplicationMailer
{
  /**
   * @var \Swift_Mailer
   */
  private $mailer;

  public function __construct(\Swift_Mailer $mailer)
  {
    $this->mailer = $mailer;
  }

  public function sendNewNotification(Application $application)
  {
    /*$message = new \Swift_Message(
      'Nouvelle candidature',
      'Vous avez reçu une nouvelle candidature.'
    );

    $message
      ->addTo($application->getAdvert()->getMailAuthor()) // Ici bien sûr il faudrait un attribut "email", j'utilise "author" à la place
      ->addFrom('admin@votresite.com')
    ;*/
    $message = \Swift_Message::newInstance()
            ->setSubject('The Subject for this Message')
            ->setFrom('tinq06@gmail.com')
            ->setTo($application->getAdvert()->getMailAuthor())
            ->setBody('Nouveau message candidature')
        ;
    $this->mailer->send($message);
  }
}
