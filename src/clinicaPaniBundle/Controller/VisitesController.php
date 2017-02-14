<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VisitesController extends Controller {

    public function vistaVisitaAction() {
        //return $this->render('clinicaPaniBundle:Default:index.html.twig');
        $visites = $this->getDoctrine()->getRepository('clinicaPaniBundle:Visita')->findAll();
        return $this->render('clinicaPaniBundle:Default:vvisites.html.twig', array(
                    'Visites' => $visites
        ));
    }

}
