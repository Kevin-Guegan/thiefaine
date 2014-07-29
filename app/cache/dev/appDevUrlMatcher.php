<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // thiefaine_referentiel_accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'thiefaine_referentiel_accueil',);
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
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_delete')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ZoneController::deleteAction',));
            }

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

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // thiefaine_referentiel_utilisateurweb_list
            if (rtrim($pathinfo, '/') === '/utilisateur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'thiefaine_referentiel_utilisateurweb_list');
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurwebController::indexAction',  '_route' => 'thiefaine_referentiel_utilisateurweb_list',);
            }

            // utilisateurweb_edit
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurweb_edit')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurwebController::editAction',));
            }

            // utilisateurweb_update
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_utilisateurweb_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurweb_update')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurwebController::updateAction',));
            }
            not_utilisateurweb_update:

            // utilisateurweb_delete
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurweb_delete')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurwebController::deleteAction',));
            }

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

            // information_show
            if (preg_match('#^/information/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'information_show')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::showAction',));
            }

            // information_clone
            if (preg_match('#^/information/(?P<id>[^/]++)/clone$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'information_clone')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::cloneAction',));
            }

            // information_cloneupdate
            if (preg_match('#^/information/(?P<id>[^/]++)/cloneupdate$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'information_cloneupdate')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::cloneupdateAction',));
            }

            // information_delete
            if (preg_match('#^/information/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'information_delete')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/categorie')) {
            // categorie
            if (rtrim($pathinfo, '/') === '/categorie') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categorie');
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie',);
            }

            // categorie_new
            if ($pathinfo === '/categorie/new') {
                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
            }

            // categorie_create
            if ($pathinfo === '/categorie/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categorie_create;
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\CategorieController::createAction',  '_route' => 'categorie_create',);
            }
            not_categorie_create:

            // categorie_edit
            if (preg_match('#^/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\CategorieController::editAction',));
            }

            // categorie_update
            if (preg_match('#^/categorie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_categorie_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_update')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\CategorieController::updateAction',));
            }
            not_categorie_update:

            // categorie_delete
            if (preg_match('#^/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\CategorieController::deleteAction',));
            }

        }

        // thiefaine_referentiel_myaccount
        if ($pathinfo === '/myaccount') {
            return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\DefaultController::myaccountAction',  '_route' => 'thiefaine_referentiel_myaccount',);
        }

        // fos_user_security_login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_security_login');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        // fos_user_profile_show
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'fos_user_profile_show',);
        }

        // fos_user_profile_edit
        if ($pathinfo === '/moncompte') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // fos_user_registration_register
            if ($pathinfo === '/utilisateur/new') {
                return array (  '_controller' => 'Thiefaine\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/utilisateur/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/utilisateur/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Thiefaine\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/utilisateur/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/utilisateur/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Thiefaine\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/utilisateur/confirmed') {
                        return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurwebController::indexAction',  '_route' => 'fos_user_registration_confirmed',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/moncompte/password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/groupe')) {
            // fos_user_group_list
            if (rtrim($pathinfo, '/') === '/groupe') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_list;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_group_list');
                }

                return array (  '_controller' => 'Thiefaine\\UserBundle\\Controller\\GroupController::listAction',  '_route' => 'fos_user_group_list',);
            }
            not_fos_user_group_list:

            // fos_user_group_new
            if ($pathinfo === '/groupe/new') {
                return array (  '_controller' => 'Thiefaine\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fos_user_group_new',);
            }

            // fos_user_group_show
            if (preg_match('#^/groupe/(?P<groupName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_show')), array (  '_controller' => 'Thiefaine\\UserBundle\\Controller\\GroupController::showAction',));
            }
            not_fos_user_group_show:

            // fos_user_group_edit
            if (preg_match('#^/groupe/(?P<groupName>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_edit')), array (  '_controller' => 'Thiefaine\\UserBundle\\Controller\\GroupController::editAction',));
            }

            // fos_user_group_delete
            if (preg_match('#^/groupe/(?P<groupName>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_group_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_group_delete')), array (  '_controller' => 'Thiefaine\\UserBundle\\Controller\\GroupController::deleteAction',));
            }
            not_fos_user_group_delete:

        }

        if (0 === strpos($pathinfo, '/utilisateurmobile')) {
            // utilisateurmobile
            if (rtrim($pathinfo, '/') === '/utilisateurmobile') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'utilisateurmobile');
                }

                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurmobileController::indexAction',  '_route' => 'utilisateurmobile',);
            }

            // utilisateurmobile_show
            if (preg_match('#^/utilisateurmobile/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurmobile_show')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurmobileController::showAction',));
            }

            // utilisateurmobile_new
            if ($pathinfo === '/utilisateurmobile/new') {
                return array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurmobileController::newAction',  '_route' => 'utilisateurmobile_new',);
            }

            // utilisateurmobile_create
            if (0 === strpos($pathinfo, '/utilisateurmobile/create') && preg_match('#^/utilisateurmobile/create/(?P<idGend>[^/]++)/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_utilisateurmobile_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurmobile_create')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurmobileController::createAction',));
            }
            not_utilisateurmobile_create:

            // utilisateurmobile_edit
            if (preg_match('#^/utilisateurmobile/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurmobile_edit')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurmobileController::editAction',));
            }

            // utilisateurmobile_update
            if (preg_match('#^/utilisateurmobile/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_utilisateurmobile_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurmobile_update')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurmobileController::updateAction',));
            }
            not_utilisateurmobile_update:

            // utilisateurmobile_delete
            if (preg_match('#^/utilisateurmobile/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_utilisateurmobile_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateurmobile_delete')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\UtilisateurmobileController::deleteAction',));
            }
            not_utilisateurmobile_delete:

        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/conseil')) {
                // thiefaine_referentiel_api_get_conseil
                if (preg_match('#^/api/conseil(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_thiefaine_referentiel_api_get_conseil;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'thiefaine_referentiel_api_get_conseil')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ConseilController::getConseilAction',  '_format' => NULL,));
                }
                not_thiefaine_referentiel_api_get_conseil:

                // thiefaine_referentiel_api_get_one_conseil
                if (preg_match('#^/api/conseil/(?P<idConseil>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_thiefaine_referentiel_api_get_one_conseil;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'thiefaine_referentiel_api_get_one_conseil')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\ConseilController::getOneConseilAction',  '_format' => NULL,));
                }
                not_thiefaine_referentiel_api_get_one_conseil:

            }

            // thiefaine_referentiel_api_index
            if (0 === strpos($pathinfo, '/api/index') && preg_match('#^/api/index(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_thiefaine_referentiel_api_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thiefaine_referentiel_api_index')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::indexAction',  '_format' => NULL,));
            }
            not_thiefaine_referentiel_api_index:

            // thiefaine_referentiel_api_show
            if (preg_match('#^/api/(?P<id>[^/]++)/show(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_thiefaine_referentiel_api_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thiefaine_referentiel_api_show')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::showAction',  '_format' => NULL,));
            }
            not_thiefaine_referentiel_api_show:

            // thiefaine_referentiel_api_new
            if (0 === strpos($pathinfo, '/api/new') && preg_match('#^/api/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_thiefaine_referentiel_api_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thiefaine_referentiel_api_new')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::newAction',  '_format' => NULL,));
            }
            not_thiefaine_referentiel_api_new:

            // thiefaine_referentiel_api_create
            if (0 === strpos($pathinfo, '/api/create') && preg_match('#^/api/create(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_thiefaine_referentiel_api_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thiefaine_referentiel_api_create')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::createAction',  '_format' => NULL,));
            }
            not_thiefaine_referentiel_api_create:

            // thiefaine_referentiel_api_edit
            if (preg_match('#^/api/(?P<id>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_thiefaine_referentiel_api_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thiefaine_referentiel_api_edit')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::editAction',  '_format' => NULL,));
            }
            not_thiefaine_referentiel_api_edit:

            // thiefaine_referentiel_api_update
            if (preg_match('#^/api/(?P<id>[^/]++)/update(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_thiefaine_referentiel_api_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thiefaine_referentiel_api_update')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::updateAction',  '_format' => NULL,));
            }
            not_thiefaine_referentiel_api_update:

            // thiefaine_referentiel_api_clone
            if (preg_match('#^/api/(?P<id>[^/]++)/clone(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_thiefaine_referentiel_api_clone;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thiefaine_referentiel_api_clone')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::cloneAction',  '_format' => NULL,));
            }
            not_thiefaine_referentiel_api_clone:

            // thiefaine_referentiel_api_cloneupdate
            if (preg_match('#^/api/(?P<id>[^/]++)/cloneupdate(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_thiefaine_referentiel_api_cloneupdate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thiefaine_referentiel_api_cloneupdate')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::cloneupdateAction',  '_format' => NULL,));
            }
            not_thiefaine_referentiel_api_cloneupdate:

            // thiefaine_referentiel_api_delete
            if (preg_match('#^/api/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_thiefaine_referentiel_api_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'thiefaine_referentiel_api_delete')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::deleteAction',  '_format' => NULL,));
            }
            not_thiefaine_referentiel_api_delete:

            if (0 === strpos($pathinfo, '/api/information')) {
                // thiefaine_referentiel_api_get_information_one
                if (preg_match('#^/api/information/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_thiefaine_referentiel_api_get_information_one;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'thiefaine_referentiel_api_get_information_one')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::getInformationOneAction',  '_format' => NULL,));
                }
                not_thiefaine_referentiel_api_get_information_one:

                // thiefaine_referentiel_api_get_information
                if (preg_match('#^/api/information(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_thiefaine_referentiel_api_get_information;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'thiefaine_referentiel_api_get_information')), array (  '_controller' => 'Thiefaine\\ReferentielBundle\\Controller\\InformationController::getInformationAction',  '_format' => NULL,));
                }
                not_thiefaine_referentiel_api_get_information:

            }

            // nelmio_api_doc_index
            if (rtrim($pathinfo, '/') === '/api/doc') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nelmio_api_doc_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'nelmio_api_doc_index');
                }

                return array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  '_route' => 'nelmio_api_doc_index',);
            }
            not_nelmio_api_doc_index:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
