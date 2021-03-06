<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use clinicaPaniBundle\Entity\Metge;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MetgesController extends Controller {

    public function vistaMetgeAction() {

        //Comprovar si existeix sessió
        if ($this->get('session')->isStarted()) {
            
        } else {
            $session = new Session();
            $session->start();
        }
        $session = $this->get('session');
        //Comprovar si estas logejat
        if ($session->has('username')) {
            
        } else {
            return $this->redirectToRoute('login');
        }


        $metges = $this->getDoctrine()->getRepository('clinicaPaniBundle:Metge')->findAll();
        return $this->render('clinicaPaniBundle:Default:vmetges.html.twig', array(
                    'Metges' => $metges,
                    'rol' => $session->get('rol'),
                    'titol' => 'Metges registrats'
        ));
    }

    public function afegirMetgeAction(Request $req) {
        //Comprovar si existeix sessió
        if ($this->get('session')->isStarted()) {
            
        } else {
            $session = new Session();
            $session->start();
        }
        $session = $this->get('session');
        //Comprovar si estas logejat
        if ($session->has('username')) {
            
        } else {
            return $this->redirectToRoute('login');
        }
        if ($session->get('rol') < 99) {
            return $this->redirectToRoute('clinica_pani_homepage');
        }

        $metge = new Metge();
        $form = $this->createFormBuilder($metge)
                ->add('dni', TextType::class, array('label' => 'DNI'))
                ->add('nom', TextType::class, array('label' => 'Nom'))
                ->add('cognom', TextType::class, array('label' => 'Cognom'))
                //APLICAR DROPDOWN CHOICE
                ->add('especialitat', TextType::class, array('label' => 'Especialitat'))
                ->add('afegir', SubmitType::class, array('label' => 'Afegir Pacient'))
                ->getForm();

        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $metge = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($metge);
            $em->flush();

            return $this->redirectToRoute('clinica_pani_vistametge');
        }
        return $this->render('clinicaPaniBundle:Default:ametge.html.twig', array(
                    'titol' => 'Afegir Metge',
                    'form' => $form->createView()));
    }

    public function modificarMetgeAction($dni, Request $req) {
        //Comprovar si existeix sessió
        if ($this->get('session')->isStarted()) {
            
        } else {
            $session = new Session();
            $session->start();
        }
        $session = $this->get('session');
        //Comprovar si estas logejat
        if ($session->has('username')) {
            
        } else {
            return $this->redirectToRoute('login');
        }
        if ($session->get('rol') < 99) {
            return $this->redirectToRoute('clinica_pani_homepage');
        }
        $em = $this->getDoctrine()->getEntityManager();
        $metges = $em->getRepository("clinicaPaniBundle:Metge");

        $metge = $metges->findOneBy(array('dni' => $dni));

        if (!$metge) {

            $response = $this->render('clinicaPaniBundle:Default:404.html.twig', array(
                'message' => 'No s\'ha pogut trobar el metge, metge no existent '
            ));

            $response->setStatusCode(404);

            return $response;
        } else {
            $form = $this->createFormBuilder($metge)
                    ->add('dni', TextType::class, array('label' => 'DNI', 'data' => $metge->getDni()))
                    ->add('nom', TextType::class, array('label' => 'Nom', 'data' => $metge->getNom()))
                    ->add('cognom', TextType::class, array('label' => 'Cognom', 'data' => $metge->getCognom()))
                    //APLICAR DROPDOWN CHOICE I SELECTED
                    ->add('especialitat', TextType::class, array('label' => 'Especialitat', 'data' => $metge->getEspecialitat()))
                    ->add('modificar', SubmitType::class, array('label' => 'Modificar Metge'))
                    ->getForm();

            $form->handleRequest($req);

            if ($form->isSubmitted() && $form->isValid()) {
                $metge = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($metge);
                $em->flush();

                return $this->redirectToRoute('clinica_pani_vistametge');
            }
        }

        return $this->render('clinicaPaniBundle:Default:mmetge.html.twig', array(
                    'titol' => 'Modificar Metge',
                    'form' => $form->createView()));
    }

    public function eliminarMetgeAction($dni) {
        //Comprovar si existeix sessió
        if ($this->get('session')->isStarted()) {
            
        } else {
            $session = new Session();
            $session->start();
        }
        $session = $this->get('session');
        //Comprovar si estas logejat
        if ($session->has('username')) {
            
        } else {
            return $this->redirectToRoute('login');
        }
        if ($session->get('rol') < 99) {
            return $this->redirectToRoute('clinica_pani_homepage');
        }
        $em = $this->getDoctrine()->getEntityManager();
        $metges = $em->getRepository("clinicaPaniBundle:Metge");

        $metge = $metges->findOneBy(array('dni' => $dni));

        if (!$metge) {
            $response = $this->render('clinicaPaniBundle:Default:404.html.twig', array(
                'message' => 'No s\'ha pogut essborrar el metge, metge no existent '
            ));

            $response->setStatusCode(404);

            return $response;
        } else {
            $em->remove($metge);
            $em->flush();
            return $this->redirectToRoute('clinica_pani_vistametge');
        }
        die();
    }

}
