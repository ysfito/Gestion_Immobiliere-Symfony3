<?php

namespace HTL\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use HTL\ImmobilierBundle\Entity\Proprietaire;
use HTL\ImmobilierBundle\Entity\Localite;

use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;




class APIController extends Controller
{
    /**
     * @Route("/api")
     */
    public function apiAction()
    {
        return $this->render('HTLImmobilierBundle:API:api.html.twig', array(
            // ...
        ));
    }


    /**
     * @Route("/showproprietaire")
     *@Method("{GET}")
     */
    public function showProprietaireAction()
    {
      $proprietaires= $this->getDoctrine()->getManager()
                        ->getRepository(Proprietaire::class)->findAll();// recupere tous les proprios

    $data= $this->get('jms_serializer')->serialize($proprietaires,'json');


                if ($data === null) {

                $response= array(
                    'success'=>false,
                    'message'=>'Pas de prioprietaire de Bien',
                    'erreur'=>null,
                    'data'=>null
                );
                return new JsonResponse($response, Response::HTTP_NOT_FOUND);

                }

         else{

             $response= array(
                 'success'=>true,
                 'message'=>'la liste des proprietaires',
                 'erreur'=>null,
                 'data'=>json_decode($data)
             );

             return new JsonResponse($response,Response::HTTP_OK );


         }
    }

        /**
         * @Route("/addproprio")
         * @Method("{POST}")
         */
    public function  addproprietaireAction(Request $request){

            $data= $request->getContent();
         $proprio = $this->get('jms_serializer')->deserialize($data, Proprietaire::class, 'json');
           $em= $this->getDoctrine()->getManager();
             $em->persist($proprio);
             $em>flush();

             return new JsonResponse("",Response::HTTP_CREATED);

    }

    /**
     * @Route("editproprietaire/{id}")
     * @Method("{PUT}")
     */
    public  function editproprietaireAction($id)

    {
        
    }
}
