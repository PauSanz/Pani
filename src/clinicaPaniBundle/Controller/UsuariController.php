<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use clinicaPaniBundle\Entity\Usuari;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;

class UsuariController extends Controller {

    public function loginAction(Request $req) {

        
        if ($this->get('session')->isStarted()) {
            
        } else {
            $session = new Session();
            $session->start();
        }

//        Formulari de log in
        $form = $this->createFormBuilder()
                ->add('usuari', TextType::class, array('label' => 'Usuari'))
                ->add('contranseya', PasswordType::class, array('label' => 'Contrasenya'))
                ->add('login', SubmitType::class, array('label' => 'Inicia Sessió'))
                ->getForm();


        $form->handleRequest($req);


        if ($form->isSubmitted() && $form->isValid()) {

//            Cridem a la entitat Usuari i busquem si coincideix la contrasenya
            $userlog = $form->getData();
            $em = $this->getDoctrine()->getEntityManager();
            $users = $em->getRepository("clinicaPaniBundle:Usuari");
            $usuari = $users->findOneBy(array('usuari' => $form->get('usuari')->getData()));

            if ($usuari != null && $usuari->getPass() == $form->get('contranseya')->getData()) {
//                $_SESSION["username"] = $usuari->getUsuari();
//                $_SESSION["rol"] = $usuari->getRol();
                $session = $this->get('session');
                $session->set('username', $usuari->getUsuari());
                $session->set('rol', $usuari->getRol());
                return $this->redirectToRoute('clinica_pani_homepage');
            }
        }

        return $this->render('clinicaPaniBundle:Default:login.html.twig', array(
                    'titol' => 'Inici Sessió',
                    'form' => $form->createView()));
    }

    public function logoutAction() {
        session_destroy();
        return $this->redirectToRoute('login');
    }

}
