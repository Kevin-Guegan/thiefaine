<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // thiefaine_referentiel_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'thiefaine_referentiel_homepage');
            }

            return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\DefaultController::indexAction',  '_route' => 'thiefaine_referentiel_homepage',);
        }

        // thiefaine_referentiel_accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'thiefaine_referentiel_accueil',);
        }

        // thiefaine_referentiel_myaccount
        if ($pathinfo === '/myaccount') {
            return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\DefaultController::myaccountAction',  '_route' => 'thiefaine_referentiel_myaccount',);
        }

        if (0 === strpos($pathinfo, '/groupe')) {
            // groupe
            if (rtrim($pathinfo, '/') === '/groupe') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'groupe');
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\GroupeController::indexAction',  '_route' => 'groupe',);
            }

            // groupe_show
            if (preg_match('#^/groupe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_show')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\GroupeController::showAction',));
            }

            // groupe_new
            if ($pathinfo === '/groupe/new') {
                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\GroupeController::newAction',  '_route' => 'groupe_new',);
            }

            // groupe_create
            if ($pathinfo === '/groupe/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_groupe_create;
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\GroupeController::createAction',  '_route' => 'groupe_create',);
            }
            not_groupe_create:

            // groupe_edit
            if (preg_match('#^/groupe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_edit')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\GroupeController::editAction',));
            }

            // groupe_update
            if (preg_match('#^/groupe/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_groupe_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_update')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\GroupeController::updateAction',));
            }
            not_groupe_update:

            // groupe_delete
            if (preg_match('#^/groupe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_groupe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_delete')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\GroupeController::deleteAction',));
            }
            not_groupe_delete:

        }

        if (0 === strpos($pathinfo, '/zone')) {
            // zone
            if (rtrim($pathinfo, '/') === '/zone') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'zone');
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ZoneController::indexAction',  '_route' => 'zone',);
            }

            // zone_show
            if (preg_match('#^/zone/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_show')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ZoneController::showAction',));
            }

            // zone_new
            if ($pathinfo === '/zone/new') {
                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ZoneController::newAction',  '_route' => 'zone_new',);
            }

            // zone_create
            if ($pathinfo === '/zone/create/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_zone_create;
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ZoneController::createAction',  '_route' => 'zone_create',);
            }
            not_zone_create:

            // zone_edit
            if (preg_match('#^/zone/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_edit')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ZoneController::editAction',));
            }

            // zone_update
            if (preg_match('#^/zone/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_zone_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_update')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ZoneController::updateAction',));
            }
            not_zone_update:

            // zone_delete
            if (preg_match('#^/zone/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_zone_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_delete')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ZoneController::deleteAction',));
            }
            not_zone_delete:

        }

        if (0 === strpos($pathinfo, '/point')) {
            // point
            if (rtrim($pathinfo, '/') === '/point') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'point');
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\PointController::indexAction',  '_route' => 'point',);
            }

            // point_show
            if (preg_match('#^/point/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'point_show')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\PointController::showAction',));
            }

            // point_new
            if (0 === strpos($pathinfo, '/point/new') && preg_match('#^/point/new/(?P<idzone>[^/]++)/(?P<lat>[^/]++)/(?P<lng>[^/]++)/(?P<rad>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'point_new')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\PointController::newAction',));
            }

            // point_create
            if ($pathinfo === '/point/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_point_create;
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\PointController::createAction',  '_route' => 'point_create',);
            }
            not_point_create:

            // point_edit
            if (preg_match('#^/point/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'point_edit')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\PointController::editAction',));
            }

            // point_update
            if (preg_match('#^/point/(?P<idpoint>[^/]++)/(?P<lat>[^/]++)/(?P<lng>[^/]++)/(?P<rad>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'point_update')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\PointController::updateAction',));
            }

            // point_delete
            if (preg_match('#^/point/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'point_delete')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\PointController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/utilisateurweb')) {
            // utilisateurweb
            if (rtrim($pathinfo, '/') === '/utilisateurweb') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'utilisateurweb');
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurwebController::indexAction',  '_route' => 'utilisateurweb',);
            }

            // utilisateurweb_show
            if (preg_match('#^/utilisateurweb/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurweb_show')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurwebController::showAction',));
            }

            // utilisateurweb_new
            if ($pathinfo === '/utilisateurweb/new') {
                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurwebController::newAction',  '_route' => 'utilisateurweb_new',);
            }

            // utilisateurweb_create
            if ($pathinfo === '/utilisateurweb/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_utilisateurweb_create;
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurwebController::createAction',  '_route' => 'utilisateurweb_create',);
            }
            not_utilisateurweb_create:

            // utilisateurweb_edit
            if (preg_match('#^/utilisateurweb/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurweb_edit')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurwebController::editAction',));
            }

            // utilisateurweb_update
            if (preg_match('#^/utilisateurweb/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_utilisateurweb_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurweb_update')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurwebController::updateAction',));
            }
            not_utilisateurweb_update:

            // utilisateurweb_delete
            if (preg_match('#^/utilisateurweb/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_utilisateurweb_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurweb_delete')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurwebController::deleteAction',));
            }
            not_utilisateurweb_delete:

        }

        if (0 === strpos($pathinfo, '/conseil')) {
            // conseil
            if (rtrim($pathinfo, '/') === '/conseil') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'conseil');
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ConseilController::indexAction',  '_route' => 'conseil',);
            }

            // conseil_show
            if (preg_match('#^/conseil/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'conseil_show')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ConseilController::showAction',));
            }

            // conseil_new
            if ($pathinfo === '/conseil/new') {
                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ConseilController::newAction',  '_route' => 'conseil_new',);
            }

            // conseil_create
            if ($pathinfo === '/conseil/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_conseil_create;
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ConseilController::createAction',  '_route' => 'conseil_create',);
            }
            not_conseil_create:

            // conseil_edit
            if (preg_match('#^/conseil/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'conseil_edit')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ConseilController::editAction',));
            }

            // conseil_update
            if (preg_match('#^/conseil/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_conseil_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'conseil_update')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ConseilController::updateAction',));
            }
            not_conseil_update:

            // conseil_delete
            if (preg_match('#^/conseil/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'conseil_delete')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ConseilController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/information')) {
            // information
            if (rtrim($pathinfo, '/') === '/information') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'information');
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::indexAction',  '_route' => 'information',);
            }

            // information_show
            if (preg_match('#^/information/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'information_show')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::showAction',));
            }

            // information_new
            if ($pathinfo === '/information/new') {
                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::newAction',  '_route' => 'information_new',);
            }

            // information_create
            if ($pathinfo === '/information/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_information_create;
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::createAction',  '_route' => 'information_create',);
            }
            not_information_create:

            // information_edit
            if (preg_match('#^/information/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'information_edit')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::editAction',));
            }

            // information_update
            if (preg_match('#^/information/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_information_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'information_update')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::updateAction',));
            }
            not_information_update:

            // information_delete
            if (preg_match('#^/information/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'information_delete')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/alerte')) {
            // alerte
            if (rtrim($pathinfo, '/') === '/alerte') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'alerte');
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\AlerteController::indexAction',  '_route' => 'alerte',);
            }

            // alerte_show
            if (preg_match('#^/alerte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alerte_show')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\AlerteController::showAction',));
            }

            // alerte_new
            if ($pathinfo === '/alerte/new') {
                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\AlerteController::newAction',  '_route' => 'alerte_new',);
            }

            // alerte_create
            if ($pathinfo === '/alerte/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_alerte_create;
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\AlerteController::createAction',  '_route' => 'alerte_create',);
            }
            not_alerte_create:

            // alerte_edit
            if (preg_match('#^/alerte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alerte_edit')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\AlerteController::editAction',));
            }

            // alerte_update
            if (preg_match('#^/alerte/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_alerte_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alerte_update')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\AlerteController::updateAction',));
            }
            not_alerte_update:

            // alerte_delete
            if (preg_match('#^/alerte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alerte_delete')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\AlerteController::deleteAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
