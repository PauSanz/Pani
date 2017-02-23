<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class VisitesController extends Controller {

    public function vistaVisitaAction(Request $req) {
        $imprimir = 'Tots';
        $form = $this->createFormBuilder()
        ->add('Filtrar', ChoiceType::class, array(
        'choices' => array(
        'Tots' => 'Tots',
        'Concertada' => 'Concertada',
        'Tractament' => 'Tractament',
        'Urgent' => 'Urgent')))
        ->add('afegir', SubmitType::class, array('label' => 'Filtrar'))
        ->getForm();
        
        
        $form->handleRequest($req);
        
        if ($form->isSubmitted() && $form->isValid()) {

            $dadas = $form->get('Filtrar')->getData();
            $imprimir = $dadas;

            
        }

        
        //return $this->render('clinicaPaniBundle:Default:index.html.twig');
        $visites = $this->getDoctrine()->getRepository('clinicaPaniBundle:Visita')->findAll();
        return $this->render('clinicaPaniBundle:Default:vvisites.html.twig', array(
                    'Visites' => $visites,
                    'titol' => 'Visites registrades',
                    'choice' => $imprimir,
                    'form' => $form->createView()
        ));
    }

    
    public function veureDetallsAction($ref) {

        
        
        //return $this->render('clinicaPaniBundle:Default:index.html.twig');
        $visita = $this->getDoctrine()->getRepository('clinicaPaniBundle:Visita')->findOneBy(array('ref' => $ref));

        if (!$visita) {
            /* throw $this->createNotFoundException(
              'No s\'ha trobat categoría per la id '.$id
              ); */
            $response = $this->render('clinicaPaniBundle:Default:404.html.twig', array(
                'message' => 'No s\'ha trobat cap visita ' . $ref
            ));

            $response->setStatusCode(404);

            return $response;
        }

        return $this->render('clinicaPaniBundle:Default:dtllsvisita.html.twig', array(
                    'titol' => 'Detalls de la visita ref: ' . $ref,
                    'visita' => $visita));
    }

}
