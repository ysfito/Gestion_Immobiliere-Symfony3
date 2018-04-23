<?php

namespace HTL\ImmobilierBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use HTL\ImmobilierBundle\Entity\Bien;
use HTL\ImmobilierBundle\Entity\Image;
use HTL\ImmobilierBundle\Entity\Contrat;
use HTL\ImmobilierBundle\Entity\Client;

use HTL\ImmobilierBundle\Entity\Reservation;
use HTL\ImmobilierBundle\Entity\typeBien;


class FrontController extends Controller
{
    /**
     * @Route("front/bien/search")
     */
    public function searchAction()
    {
        return $this->render('HTLImmobilierBundle:Front:pageaccueil.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("front/bien/list")
     */
    public function listAction()
    {
        $repository= $this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:Bien');
        $listBien=$repository->findAll();

        return $this->render('HTLImmobilierBundle:Front:list.html.twig', array( 'biens'=>$listBien
            // ...
        ));
    }

    /**
     * @Route("front/bien/listypebien")
     */
    public function listypebienAction(Request $request)
    {



            //if( $request->isXMLHttpRequest() ){

                $repository= $this->getDoctrine()
                ->getManager()
                ->getRepository('HTLImmobilierBundle:typeBien');
                 $listypeBien= $repository->findAll();

            //}

            //$response= new JsonResponse();


            //return  $response->setData(array( 'types' => $listypeBien));

        return $this->render('HTLImmobilierBundle:Front:listypebien.html.twig', array( 'types'=>$listypeBien
                // ...
            ));

        /*$repository =$this->getDoctrine()->getManager()->getRepository('HTLImmobilierBundle:typeBien');
        $response = new Response(json_encode($repository));
        return $response;*/
    }

    
    
    /**
     * @Route("/front/bien/listypebien/editer_typebien/{id}")
     */
    
    public function editer_typebienAction(Request $request){
        
        if(isset($_GET['editer'])){
             if($request->isMethod('GET')){
      
                extract($_GET);

                $typedit= $this
                ->getDoctrine()
                ->getManager()
                ->getRepository(typeBien::class)
                ->findOnBy($id);
    

            }
        }

       /*  if($request->isMethod('POST')){

            extract($_POST);
            $em=$em = $this->getDoctrine()->getManager();
            $typediter= $this
                ->getDoctrine()
                ->getManager()
                ->getRepository(typeBien::class)
                ->findOnBy($id);
                $typediter->setLibelle($libelle);
        } */
        
        /*  $form=$formUser->createView(); 
            return new Response('modification effectue');*/
      //  return $this->render('SNTImmobilierBundle:Admin:edit.html.twig',
               //             ); 

               return $this->render('SNTImmobilierBundle:Front:editer_typebien.html.twig');

    }

    
    /**
     * @Route("front/bien/supprtypebien")
     */
    public function supprAction(typeBien $typedelete){// on transform l'id passer en parenmettre dans le path en une instence d'Utilisateurs
        $em= $this->getDoctrine()->getManager();     
        $em->remove($typedelete);
        $em->flush();

        return new Response('$typedelete.nomComplet'.'supprimé avec succes');

    }


    /**
     * @Route("front/bien/catalogue")
     */
    public function catalogueAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reservation= $em->getRepository(Bien::class)->findlistBien();
         $listbien= $reservation;
               
           return $this->render('HTLImmobilierBundle:Front:catalogue.html.twig', array(
             'biens' => $listbien,
                       ));
    }



    /**
     * @Route("/acceuil")
     */
    public function acceuilAction()
    {
        return $this->render('HTLImmobilierBundle:Front:acceuil.html.twig', array(
            // ...
        ));
    }


     /**
     * @Route("front/bien/reservation")
     */
    public function reservationAction(Request $request, $id)
    { 

        if($request -> isMethod('POST')){
            extract($_POST);
//ajout client
$em=$this->getDoctrine()->getManager();

            if(isset($_POST['inscription'])){
                
                $client= new Client();
                $client->setNumPiece($numpiece);
                $client->setNomComplet($nomcomplet);
                $client->setTel($tel);
                $client->setAdresse($adresse);
                $client->setEmail($email);
                $client->setPassword($password);
                $em->persist($client);
                $em->flush();


//enregistrement reservation
                $reservation= new Reservation();
//$bien=$em->getRepository(Bien::class)->find($idbien);
              //recupere le bien

                extract($_GET);
             
                $bien = $this->getDoctrine()
                     ->getManager()
                     ->getRepository(Bien::class)
                     ->findBy( array('id'=>$id));

                     
                $reservation->setDateReservation(new \DateTime('now') );
                $reservation->setEtat(false);
                $reservation->setBien($bien[0]);
                $reservation->setClient($client);

                $em->persist($reservation);
                $em->flush();

                return $this->render('HTLImmobilierBundle:Front:reservation.html.twig', array(
                    'biens'=>$bien
                    // ...
                ));
            
            }
            
            else if(isset($_POST['connexion'])){
               //authentification
               extract($_POST);

                     $client= new Client();

                $Client=$this->getDoctrine()->getManager()
                    ->getRepository(Client::class)
                    ->findBy(array('email'=>$email, 'password'=>$password));
           /* 
                    foreach ($Client as $key=> $clienT){

                    } */
                        
                      $reservation= new Reservation();
                      extract($_GET);
             
                      $bien = $this->getDoctrine()
                           ->getManager()
                           ->getRepository(Bien::class)
                           ->findBy( array('id'=>$id) );

                $reservation->setDateReservation(new \DateTime('now'));
                $reservation->setEtat(false);
                $reservation->setBien($bien[0]);
                $reservation->setClient($Client[0]);
               
                   
                $em->persist($reservation);
           
                $em->flush();
            
            }

    }
    
    if ($request->isMethod('GET')) {
        extract($_GET);
        $em= $this->getDoctrine()->getManager();
        $bien =$em->getRepository(Bien::class)->findBy( array('id'=>$id) );
       
    
} 
    return $this->render('HTLImmobilierBundle:Front:reservation.html.twig', array(
        'biens'=>$bien
        // ...
    ));

    }
    
    
    
    
    
}