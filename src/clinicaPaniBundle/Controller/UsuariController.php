<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use clinicaPaniBundle\Entity\Usuari;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class UsuariController extends Controller {
//     Login antic, no funciona
//    public function loginAction(Request $request) {
//        //Llamamos al servicio de autenticacion
//        $authenticationUtils = $this->get('security.authentication_utils');
//
//        // conseguir el error del login si falla
//        $error = $authenticationUtils->getLastAuthenticationError();
//
//        // ultimo nombre de usuario que se ha intentado identificar
//        $lastUsername = $authenticationUtils->getLastUsername();
//
//        return $this->render(
//                        'clinicaPaniBundle:Default:login.html.twig', array(
//                    'last_username' => $lastUsername,
//                    'error' => $error
//        ));
//    }
    
    
    public function loginAction(Request $req) {
        
        
        
//        Formulari de log in
        $form = $this->createFormBuilder()
                ->add('usuari', TextType::class, array('label' => 'Usuari'))
                ->add('contranseya', TextType::class, array('label' => 'Contrasenya'))
                ->add('login', SubmitType::class, array('label' => 'Log in'))
                ->getForm();
        
        
        $form->handleRequest($req);

         
        if ($form->isSubmitted() && $form->isValid()) {
            
//            Cridem a la entitat Usuari i busquem si coincideix la contrasenya
            $userlog = $form->getData();
            $em = $this->getDoctrine()->getEntityManager();
            $users = $em->getRepository("clinicaPaniBundle:Usuari");
            $usuari = $users->findOneBy(array('usuari' => $form->get('usuari')->getData()));
            
            if ($usuari != null && $usuari->getPass() == $form->get('contranseya')->getData()) {
            $_SESSION["username"] = $usuari->getUsuari();
            $_SESSION["rol"] = $usuari->getRol();
            return $this->redirectToRoute('clinica_pani_homepage');    
            }
        }
        
        return $this->render('clinicaPaniBundle:Default:login.html.twig', array(
                    'titol' => 'Log in',
                    'form' => $form->createView()));
        
    }

}
