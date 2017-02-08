<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MetgesController extends Controller {

    public function vistaMetgeAction() {
        //return $this->render('clinicaPaniBundle:Default:index.html.twig');
        $metges = $this->getDoctrine()->getRepository('clinicaPaniBundle:Metge')->findAll();
        return $this->render('clinicaPaniBundle:Default:vmetges.html.twig', array(
                    'Metges' => $metges
        ));
    }

}
