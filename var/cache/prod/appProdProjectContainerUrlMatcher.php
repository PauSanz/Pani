<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // clinica_pani_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'clinica_pani_homepage');
            }

            return array (  '_controller' => 'clinicaPaniBundle\\Controller\\DefaultController::indexAction',  '_route' => 'clinica_pani_homepage',);
        }

        if (0 === strpos($pathinfo, '/v')) {
            // clinica_pani_vistametge
            if ($pathinfo === '/vmetge') {
                return array (  '_controller' => 'clinicaPaniBundle\\Controller\\MetgesController::vistaMetgeAction',  '_route' => 'clinica_pani_vistametge',);
            }

            // clinica_pani_vistapacient
            if ($pathinfo === '/vpacient') {
                return array (  '_controller' => 'clinicaPaniBundle\\Controller\\PacientsController::vistaPacientAction',  '_route' => 'clinica_pani_vistapacient',);
            }

        }

        // clinica_pani_modipacient
        if (0 === strpos($pathinfo, '/mdfpacient') && preg_match('#^/mdfpacient/(?P<dni>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clinica_pani_modipacient')), array (  '_controller' => 'clinicaPaniBundle\\Controller\\PacientsController::modificarPacientAction',));
        }

        // clinica_pani_afgrpacient
        if (rtrim($pathinfo, '/') === '/afgrpacient') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'clinica_pani_afgrpacient');
            }

            return array (  '_controller' => 'clinicaPaniBundle\\Controller\\PacientsController::afegirPacientAction',  '_route' => 'clinica_pani_afgrpacient',);
        }

        // clinica_pani_elimpacient
        if (0 === strpos($pathinfo, '/elmnpacient') && preg_match('#^/elmnpacient/(?P<dni>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clinica_pani_elimpacient')), array (  '_controller' => 'clinicaPaniBundle\\Controller\\PacientsController::eliminarPacientAction',));
        }

        // clinica_pani_vistavisites
        if ($pathinfo === '/vvisites') {
            return array (  '_controller' => 'clinicaPaniBundle\\Controller\\VisitesController::vistaVisitaAction',  '_route' => 'clinica_pani_vistavisites',);
        }

        // clinica_pani_detallsvisita
        if (0 === strpos($pathinfo, '/dtllsvisita') && preg_match('#^/dtllsvisita/(?P<ref>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clinica_pani_detallsvisita')), array (  '_controller' => 'clinicaPaniBundle\\Controller\\VisitesController::veureDetallsAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
