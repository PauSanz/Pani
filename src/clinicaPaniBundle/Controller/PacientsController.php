<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use clinicaPaniBundle\Entity\Client;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PacientsController extends Controller {

    public function vistaPacientAction() {

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

        $pacients = $this->getDoctrine()->getRepository('clinicaPaniBundle:Client')->findAll();
        return $this->render('clinicaPaniBundle:Default:vpacients.html.twig', array(
                    'Pacients' => $pacients,
                    'rol' => $session->get('rol'),
                    'titol' => 'Pacients registrats'
        ));
    }

    public function afegirPacientAction(Request $req) {
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
        $pacient = new Client();
        $form = $this->createFormBuilder($pacient)
                ->add('dni', TextType::class, array('label' => 'DNI'))
                ->add('nom', TextType::class, array('label' => 'Nom'))
                ->add('cognom', TextType::class, array('label' => 'Cognom'))
                ->add('afegir', SubmitType::class, array('label' => 'Afegir Pacient'))
                ->getForm();

        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $pacient = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($pacient);
            $em->flush();

            return $this->redirectToRoute('clinica_pani_vistapacient');
        }
        return $this->render('clinicaPaniBundle:Default:apacient.html.twig', array(
                    'titol' => 'Afegir Pacient',
                    'form' => $form->createView()));
        //}
    }

    public function modificarPacientAction($dni, Request $req) {
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

        $em = $this->getDoctrine()->getEntityManager();
        $pacients = $em->getRepository("clinicaPaniBundle:Client");

        $pcnt = $pacients->findOneBy(array('dni' => $dni));

        if (!$pcnt) {

            $response = $this->render('clinicaPaniBundle:Default:404.html.twig', array(
                'message' => 'No s\'ha pogut trobar el pacient, pacient no existent '
            ));

            $response->setStatusCode(404);

            return $response;
        } else {
            $form = $this->createFormBuilder($pcnt)
                    ->add('dni', TextType::class, array('label' => 'DNI', 'data' => $pcnt->getDni()))
                    ->add('nom', TextType::class, array('label' => 'Nom', 'data' => $pcnt->getNom()))
                    ->add('cognom', TextType::class, array('label' => 'Cognom', 'data' => $pcnt->getCognom()))
                    ->add('modificar', SubmitType::class, array('label' => 'Modificar Pacient'))
                    ->getForm();

            $form->handleRequest($req);

            if ($form->isSubmitted() && $form->isValid()) {
                $pcnt = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($pcnt);
                $em->flush();

                return $this->redirectToRoute('clinica_pani_vistapacient');
            }
        }

        return $this->render('clinicaPaniBundle:Default:mpacient.html.twig', array(
                    'titol' => 'Modificar Pacient',
                    'form' => $form->createView()));
    }

    public function eliminarPacientAction($dni) {
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

        $em = $this->getDoctrine()->getEntityManager();
        $pacients = $em->getRepository("clinicaPaniBundle:Client");

        $pcnt = $pacients->findOneBy(array('dni' => $dni));

        if (!$pcnt) {
            $response = $this->render('clinicaPaniBundle:Default:404.html.twig', array(
                'message' => 'No s\'ha pogut essborrar el pacient, pacient no existent '
            ));

            $response->setStatusCode(404);

            return $response;
        } else {
            $em->remove($pcnt);
            $em->flush();
            return $this->redirectToRoute('clinica_pani_vistapacient');
        }
        die();
    }

}
