<?php

namespace HTL\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use HTL\ImmobilierBundle\Entity\Reservation;


class AdminController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return $this->render('HTLImmobilierBundle:Admin:admin.html.twig', array(
            // ...
        ));
    }


    /**
     * @Route("/admin/reservation/list")
     */
    public function listreservationAction()
    {


        $em = $this->getDoctrine()->getManager();
        $list= $em->getRepository(Reservation::class)->findreservation();
        

        return $this->render('HTLImmobilierBundle:Admin:listreservation.html.twig', array('listes'=>$list
            // ...
        ));
    }



    /**
     * @Route("/admin/reservation/details")
     */
    public function detailsreservationAction(){

        extract($_GET);
        $em = $this->getDoctrine()->getManager();
        $list= $em->getRepository(Reservation::class)->showdetailreservation($_GET['id']);

        return $this->render('HTLImmobilierBundle:Admin:detailsreservation.html.twig', array(
        // ...
    ));

    }

}
