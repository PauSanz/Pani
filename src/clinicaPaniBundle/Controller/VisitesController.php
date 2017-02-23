<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use clinicaPaniBundle\Entity\Visita;
use clinicaPaniBundle\Entity\Tipusvisita;
use clinicaPaniBundle\Entity\Metge;
use clinicaPaniBundle\Entity\Client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class VisitesController extends Controller {

    public function vistaVisitaAction(Request $req) {
        $imprimir = 'Tots';
        $form = $this->createFormBuilder()
                ->add('Filtrar', ChoiceType::class, array(
                    'choices' => array(
                        'Tots' => 'Tots',
                        'Concertada' => 'Concertada',
                        'Tractament' => 'Tractament',
                        'Urgent' => 'Urgent')))
                ->add('afegir', SubmitType::class, array('label' => 'Filtrar'))
                ->getForm();


        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {

            $dadas = $form->get('Filtrar')->getData();
            $imprimir = $dadas;
        }


        //return $this->render('clinicaPaniBundle:Default:index.html.twig');

        $visites = $this->getDoctrine()->getRepository('clinicaPaniBundle:Visita')->findAll();
        return $this->render('clinicaPaniBundle:Default:vvisites.html.twig', array(
                    'Visites' => $visites,
                    'titol' => 'Visites registrades',
                    'choice' => $imprimir,
                    'form' => $form->createView()
        ));
    }

    public function veureDetallsAction($ref) {

        $visita = $this->getDoctrine()->getRepository('clinicaPaniBundle:Visita')->findOneBy(array('ref' => $ref));

        if (!$visita) {
            $response = $this->render('clinicaPaniBundle:Default:404.html.twig', array(
                'message' => 'No s\'ha trobat cap visita amb el número de referència' . $ref
            ));

            $response->setStatusCode(404);

            return $response;
        }

        return $this->render('clinicaPaniBundle:Default:dtllsvisita.html.twig', array(
                    'titol' => 'Detalls de la visita referència núm: ' . $ref,
                    'visita' => $visita));
    }

    public function afegirVisitaAction(Request $req) {
        $em = $this->getDoctrine()->getEntityManager();
        $tipusvisita = $em->getRepository("clinicaPaniBundle:Tipusvisita");
        $form = $this->createFormBuilder()
                ->add('data', DateType::class, array('label' => 'Data'))
                ->add('hora', TimeType::class, array('label' => 'Hora'))
                ->add('descripcio', TextareaType::class, array('label' => 'Descripció'))
                //APLICAR DROPDOWN CHOICE
                ->add('tipusVisita', ChoiceType::class, array(
                    'choices' => array(
                        'Concertada' => $tipusvisita->findOneBy(array('tipus' => 'Concertada')),
                        'Tractament' => $tipusvisita->findOneBy(array('tipus' => 'Tractament')),
                        'Urgent' => $tipusvisita->findOneBy(array('tipus' => 'Urgent')))))
                ->add('metgeVisitat', TextType::class, array('label' => 'DNI Metge'))
                ->add('pacientVisitat', TextType::class, array('label' => 'DNI Pacient'))
                ->add('afegir', SubmitType::class, array('label' => 'Afegir Visita'))
                ->getForm();

        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {


            $visita = new Visita();
            $em = $this->getDoctrine()->getEntityManager();

            $visita->setData($form->get('data')->getData());
            $visita->setHora($form->get('hora')->getData());
            $visita->setDescripcio($form->get('descripcio')->getData());
            $visita->setTipusvisita($form->get('tipusVisita')->getData());

//          Metge
            $dniM = $form->get('metgeVisitat')->getData();
            $metges = $em->getRepository("clinicaPaniBundle:Metge");
            $metge = $metges->findOneBy(array('dni' => $dniM));
            $visita->setMetgevisitat($metge);
//          Pacient            
            $dniP = $form->get('pacientVisitat')->getData();
            $pacients = $em->getRepository("clinicaPaniBundle:Client");
            $pacient = $pacients->findOneBy(array('dni' => $dniP));
            $visita->setPacientvisitat($pacient);


            $em = $this->getDoctrine()->getManager();
            $em->persist($visita);
            $em->flush();

            return $this->redirectToRoute('clinica_pani_vistavisites');
        }
        return $this->render('clinicaPaniBundle:Default:avisita.html.twig', array(
                    'titol' => 'Afegir Visita',
                    'form' => $form->createView()));
        //}
    }

    public function modificarVisitaAction($ref, Request $req) {

        $em = $this->getDoctrine()->getEntityManager();
        $visites = $em->getRepository("clinicaPaniBundle:Visita");
        $tipusvisita = $em->getRepository("clinicaPaniBundle:Tipusvisita");

        $visita = $visites->findOneBy(array('ref' => $ref));

        if (!$visita) {

            $response = $this->render('clinicaPaniBundle:Default:404.html.twig', array(
                'message' => 'No s\'ha pogut trobar la visita, visita no existent '
            ));

            $response->setStatusCode(404);

            return $response;
        } else {



            $form = $this->createFormBuilder()
                    ->add('data', DateType::class, array('label' => 'Data', 'data' => $visita->getData()))
                    ->add('hora', TimeType::class, array('label' => 'Hora', 'data' => $visita->getHora()))
                    ->add('descripcio', TextareaType::class, array('label' => 'Descripció', 'data' => $visita->getDescripcio()))
                    //APLICAR DROPDOWN CHOICE
                    ->add('tipusVisita', ChoiceType::class, array(
                        'choices' => array(
                            'Concertada' => $tipusvisita->findOneBy(array('tipus' => 'Concertada')),
                            'Tractament' => $tipusvisita->findOneBy(array('tipus' => 'Tractament')),
                            'Urgent' => $tipusvisita->findOneBy(array('tipus' => 'Urgent'))),
                        'data' => $visita->getTipusvisita()))
                    ->add('metgeVisitat', TextType::class, array('label' => 'DNI Metge', 'data' => $visita->getMetgevisitat()->getDni()))
                    ->add('pacientVisitat', TextType::class, array('label' => 'DNI Pacient', 'data' => $visita->getPacientvisitat()->getDni()))
                    ->add('afegir', SubmitType::class, array('label' => 'Afegir Visita'))
                    ->getForm();



            $form->handleRequest($req);

            if ($form->isSubmitted() && $form->isValid()) {


                $em = $this->getDoctrine()->getEntityManager();

                $visita->setData($form->get('data')->getData());
                $visita->setHora($form->get('hora')->getData());
                $visita->setDescripcio($form->get('descripcio')->getData());
                $visita->setTipusvisita($form->get('tipusVisita')->getData());

//          Metge
                $dniM = $form->get('metgeVisitat')->getData();
                $metges = $em->getRepository("clinicaPaniBundle:Metge");
                $metge = $metges->findOneBy(array('dni' => $dniM));
                $visita->setMetgevisitat($metge);
//          Pacient            
                $dniP = $form->get('pacientVisitat')->getData();
                $pacients = $em->getRepository("clinicaPaniBundle:Client");
                $pacient = $pacients->findOneBy(array('dni' => $dniP));
                $visita->setPacientvisitat($pacient);


                $em = $this->getDoctrine()->getManager();
                $em->persist($visita);
                $em->flush();
                return $this->redirectToRoute('clinica_pani_vistavisites');
            }
        }

        return $this->render('clinicaPaniBundle:Default:mvisita.html.twig', array(
                    'titol' => 'Modificar Visita',
                    'form' => $form->createView()));
    }

    public function eliminarVisitaAction($ref) {

        $em = $this->getDoctrine()->getEntityManager();
        $visites = $em->getRepository("clinicaPaniBundle:Visita");

        $visita = $visites->findOneBy(array('ref' => $ref));

        if (!$visita) {
            $response = $this->render('clinicaPaniBundle:Default:404.html.twig', array(
                'message' => 'No s\'ha pogut essborrar la visita, visita no existent '
            ));

            $response->setStatusCode(404);

            return $response;
        } else {
            $em->remove($visita);
            $em->flush();
            return $this->redirectToRoute('clinica_pani_vistavisites');
        }
        die();
    }

}
