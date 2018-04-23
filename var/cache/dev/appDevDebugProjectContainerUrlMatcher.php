<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // htl_immobilier_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'htl_immobilier_homepage');
            }

            return array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\DefaultController::indexAction',  '_route' => 'htl_immobilier_homepage',);
        }

        if (0 === strpos($pathinfo, '/front/bien')) {
            // search
            if ('/front/bien/search' === $pathinfo) {
                return array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\FrontController::searchAction',  '_route' => 'search',);
            }

            // suppr
            if (0 === strpos($pathinfo, '/front/bien/suppr') && preg_match('#^/front/bien/suppr/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppr')), array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\FrontController::supprAction',));
            }

            // list
            if ('/front/bien/list' === $pathinfo) {
                return array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\FrontController::listAction',  '_route' => 'list',);
            }

            if (0 === strpos($pathinfo, '/front/bien/listypebien')) {
                // listypebien
                if ('/front/bien/listypebien' === $pathinfo) {
                    return array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\FrontController::listypebienAction',  '_route' => 'listypebien',);
                }

                // editer_typebien
                if (0 === strpos($pathinfo, '/front/bien/listypebien/editer_typebien') && preg_match('#^/front/bien/listypebien/editer_typebien/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editer_typebien')), array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\FrontController::editer_typebienAction',));
                }

            }

            // catalogue
            if ('/front/bien/catalogue' === $pathinfo) {
                return array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\FrontController::catalogueAction',  '_route' => 'catalogue',);
            }

            // reservation
            if (0 === strpos($pathinfo, '/front/bien/reservation') && preg_match('#^/front/bien/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation')), array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\FrontController::reservationAction',));
            }

            // edit
            if (0 === strpos($pathinfo, '/front/bien/edit') && preg_match('#^/front/bien/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit')), array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\FrontController::editAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            // acceuil
            if ('/acceuil' === $pathinfo) {
                return array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\FrontController::acceuilAction',  '_route' => 'acceuil',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                // listreservation
                if ('/admin/reservation/list' === $pathinfo) {
                    return array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\AdminController::listreservationAction',  '_route' => 'listreservation',);
                }

                // detailsreservation
                if ('/admin/reservation/details' === $pathinfo) {
                    return array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\AdminController::detailsreservationAction',  '_route' => 'detailsreservation',);
                }

                // admin
                if ('/admin' === $pathinfo) {
                    return array (  '_controller' => 'HTLImmobilierBundle:Admi n:admin',  '_route' => 'admin',);
                }

            }

            // addproprietaire
            if ('/addproprio' === $pathinfo) {
                return array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\APIController::addproprietaireAction',  '_route' => 'addproprietaire',);
            }

        }

        // showProprietaire
        if ('/showproprietaire' === $pathinfo) {
            return array (  '_controller' => 'HTL\\ImmobilierBundle\\Controller\\APIController::showProprietaireAction',  '_route' => 'showProprietaire',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
