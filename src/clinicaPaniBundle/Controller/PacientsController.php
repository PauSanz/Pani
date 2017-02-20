<?php

namespace clinicaPaniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use clinicaPaniBundle\Entity\Client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PacientsController extends Controller {

    public function vistaPacientAction() {
        //return $this->render('clinicaPaniBundle:Default:index.html.twig');
        $pacients = $this->getDoctrine()->getRepository('clinicaPaniBundle:Client')->findAll();
        return $this->render('clinicaPaniBundle:Default:vpacients.html.twig', array(
                    'Pacients' => $pacients,
                    'titol' => 'Pacients registrats'
        ));
    }

    public function afegirPacientAction(Request $req) {
        //return $this->render('clinicaPaniBundle:Default:index.html.twig');
//        $pacients = $this->getDoctrine()->getRepository('clinicaPaniBundle:Client')->findAll();
//        return $this->render('clinicaPaniBundle:Default:vpacients.html.twig', array(
//                    'Pacients' => $pacients,
//                    'titol' => 'Pacients registrats'
//        ));

        /* $em = $this->getDoctrine()->getEntityManager();
          $pacients = $em->getRepository("clinicaPaniBundle:Client");

          $pcnt = $pacients->findOneBy(array('dni' => $dni)); */

        ///if (!$req) {
        /* $response = $this->render('clinicaPaniBundle:Default:404.html.twig', array(
          'message' => 'No s\'ha pogut modificar el pacient, pacient no existent '
          ));

          $response->setStatusCode(404);

          return $response; */
        // else {
        $pacient = new Client();
        $form = $this->createFormBuilder($pacient)

                ->add('dni', TextType::class, array('label' => 'DNI'))
                ->add('nom', TextType::class, array('label' => 'Nom'))
                ->add('cognom', TextType::class, array('label' => 'Cognom'))
                ->add('afegir', SubmitType::class, array('label' => 'Afegir Pacient'))
                ->getForm();

        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $pacient = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Category is a Doctrine entity, save it!
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

    public function eliminarPacientAction($dni) {

        $em = $this->getDoctrine()->getEntityManager();
        $pacients = $em->getRepository("clinicaPaniBundle:Client");

        $pcnt = $pacients->findOneBy(array('dni' => $dni));

        if (!$pcnt) {
            /* throw $this->createNotFoundException(
              'No s\'ha trobat categoría per la id '.$id
              ); */
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

        //return
    }

//    public function veureDetallsAction($ref) {
//        //return $this->render('clinicaPaniBundle:Default:index.html.twig');
//        $visita = $this->getDoctrine()->getRepository('clinicaPaniBundle:Visita')->findOneBy(array('ref' => $ref));
//
//        if (!$visita) {
//            /* throw $this->createNotFoundException(
//              'No s\'ha trobat categoría per la id '.$id
//              ); */
//            $response = $this->render('clinicaPaniBundle:Default:404.html.twig', array(
//                'message' => 'No s\'ha trobat cap visita ' . $ref
//            ));
//
//            $response->setStatusCode(404);
//
//            return $response;
//        }
//
//        return $this->render('clinicaPaniBundle:Default:dtllsvisita.html.twig', array(
//                    'ref' => 'Número de referència ' . $ref,
//                    'visita' => $visita));
//    }
}
