<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        if (session_status() == PHP_SESSION_ACTIVE) {
            
        } else {
            session_start();
        }
        if (!isset($_SESSION['username']) || $_SESSION['username'] == null) {
            return $this->redirectToRoute('login');
        }

        return $this->render('clinicaPaniBundle:Default:index.html.twig');
    }

}
