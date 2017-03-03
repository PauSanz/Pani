<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use clinicaPaniBundle\Entity\Usuari;
use Symfony\Component\HttpFoundation\Request;

class UsuariController extends Controller {

    public function loginAction(Request $request) {
        //Llamamos al servicio de autenticacion
        $authenticationUtils = $this->get('security.authentication_utils');

        // conseguir el error del login si falla
        $error = $authenticationUtils->getLastAuthenticationError();

        // ultimo nombre de usuario que se ha intentado identificar
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
                        'clinicaPaniBundle:Default:login.html.twig', array(
                    'last_username' => $lastUsername,
                    'error' => $error
        ));
    }

}
