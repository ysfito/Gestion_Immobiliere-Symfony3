<?php

namespace HTL\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ReservationController extends Controller
{
     public function acceuilAction(){

    return $this->render('HTLImmobilierBundle:Reservation:Acceuil.html.twig', array());

         }
}
