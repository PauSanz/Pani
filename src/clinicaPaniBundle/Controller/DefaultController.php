<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    public function indexAction() {

        
        $session = $this->get('session');
        if ($session->has('username')) {
           
        } else {
           return $this->redirectToRoute('login');  
        }

        return $this->render('clinicaPaniBundle:Default:index.html.twig');
    }

}
