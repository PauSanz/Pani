<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VisitesController extends Controller {

    public function vistaVisitaAction() {
        //return $this->render('clinicaPaniBundle:Default:index.html.twig');
        $visites = $this->getDoctrine()->getRepository('clinicaPaniBundle:Visita')->findAll();
        return $this->render('clinicaPaniBundle:Default:vvisites.html.twig', array(
                    'Visites' => $visites,
                    'titol' => 'Visites registrades'
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
                    'ref' => 'Número de referència ' . $ref,
                    'visita' => $visita));
    }

}
