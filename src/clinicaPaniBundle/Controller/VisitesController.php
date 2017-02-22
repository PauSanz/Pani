<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use clinicaPaniBundle\Entity\Visita;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class VisitesController extends Controller {

    public function vistaVisitaAction() {
        $visites = $this->getDoctrine()->getRepository('clinicaPaniBundle:Visita')->findAll();
        return $this->render('clinicaPaniBundle:Default:vvisites.html.twig', array(
                    'Visites' => $visites,
                    'titol' => 'Visites registrades'
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
        $visita = new Visita();
        $form = $this->createFormBuilder($visita)
                ->add('ref', TextType::class, array('label' => 'Referència'))
                ->add('data', TextType::class, array('label' => 'Data'))
                ->add('hora', TextType::class, array('label' => 'Hora'))
                ->add('descripcio', TextType::class, array('label' => 'Descripció'))
                //APLICAR DROPDOWN CHOICE
                ->add('tipusVisita', TextType::class, array('label' => 'Tipus'))
                ->add('metgeVisitat', TextType::class, array('label' => 'Metge'))
                ->add('pacientVisitat', TextType::class, array('label' => 'Pacient'))
                ->add('afegir', SubmitType::class, array('label' => 'Afegir Visita'))
                ->getForm();

        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $visita = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($visita);
            $em->flush();

            return $this->redirectToRoute('clinica_pani_vistavisites');
        }
        return $this->render('clinicaPaniBundle:Default:avisita.html.twig', array(
                    'titol' => 'Afegir Metge',
                    'form' => $form->createView()));
        //}
    }

    public function modificarVisitaAction($ref, Request $req) {

        $em = $this->getDoctrine()->getEntityManager();
        $visites = $em->getRepository("clinicaPaniBundle:Visita");

        $visita = $visites->findOneBy(array('ref' => $ref));

        if (!$visita) {

            $response = $this->render('clinicaPaniBundle:Default:404.html.twig', array(
                'message' => 'No s\'ha pogut trobar la visita, visita no existent '
            ));

            $response->setStatusCode(404);

            return $response;
        } else {
            $form = $this->createFormBuilder($visita)
                    ->add('ref', TextType::class, array('label' => 'Referència', 'data' => $visita->getRef()))
                    ->add('data', TextType::class, array('label' => 'Data', 'data' => $visita->getData()))
                    ->add('hora', TextType::class, array('label' => 'Hora', 'data' => $visita->getHora()))
                    ->add('descripcio', TextType::class, array('label' => 'Descripció', 'data' => $visita->getDescripcio()))
                    //APLICAR DROPDOWN CHOICE
                    ->add('tipusVisita', TextType::class, array('label' => 'Tipus', 'data' => $visita->getTipusvisita()))
                    ->add('metgeVisitat', TextType::class, array('label' => 'Metge', 'data' => $visita->getMetgevisitat()))
                    ->add('pacientVisitat', TextType::class, array('label' => 'Pacient', 'data' => $visita->getPacientvisitat()))
                    ->add('modificar', SubmitType::class, array('label' => 'Modificar Visita'))
                    ->getForm();

            $form->handleRequest($req);

            if ($form->isSubmitted() && $form->isValid()) {
                $visita = $form->getData();

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
