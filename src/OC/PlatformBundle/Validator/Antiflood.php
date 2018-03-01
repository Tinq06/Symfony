<?php
// src/OC/PlatformBundle/Validator/Antiflood.php

namespace OC\PlatformBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Antiflood extends Constraint
{
  public $message = "Erreur saisir plus de 3 caractères.";
}
