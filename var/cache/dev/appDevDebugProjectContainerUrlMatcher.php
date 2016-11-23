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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/regalo')) {
                // regalo_list
                if ($pathinfo === '/admin/regalo/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\RegaloAdminController::listAction',  '_sonata_admin' => 'admin.regalo',  '_sonata_name' => 'regalo_list',  '_route' => 'regalo_list',);
                }

                // regalo_create
                if ($pathinfo === '/admin/regalo/create') {
                    return array (  '_controller' => 'AppBundle\\Controller\\RegaloAdminController::createAction',  '_sonata_admin' => 'admin.regalo',  '_sonata_name' => 'regalo_create',  '_route' => 'regalo_create',);
                }

                // regalo_batch
                if ($pathinfo === '/admin/regalo/batch') {
                    return array (  '_controller' => 'AppBundle\\Controller\\RegaloAdminController::batchAction',  '_sonata_admin' => 'admin.regalo',  '_sonata_name' => 'regalo_batch',  '_route' => 'regalo_batch',);
                }

                // regalo_edit
                if (preg_match('#^/admin/regalo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'regalo_edit')), array (  '_controller' => 'AppBundle\\Controller\\RegaloAdminController::editAction',  '_sonata_admin' => 'admin.regalo',  '_sonata_name' => 'regalo_edit',));
                }

                // regalo_delete
                if (preg_match('#^/admin/regalo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'regalo_delete')), array (  '_controller' => 'AppBundle\\Controller\\RegaloAdminController::deleteAction',  '_sonata_admin' => 'admin.regalo',  '_sonata_name' => 'regalo_delete',));
                }

                // regalo_show
                if (preg_match('#^/admin/regalo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'regalo_show')), array (  '_controller' => 'AppBundle\\Controller\\RegaloAdminController::showAction',  '_sonata_admin' => 'admin.regalo',  '_sonata_name' => 'regalo_show',));
                }

                // regalo_export
                if ($pathinfo === '/admin/regalo/export') {
                    return array (  '_controller' => 'AppBundle\\Controller\\RegaloAdminController::exportAction',  '_sonata_admin' => 'admin.regalo',  '_sonata_name' => 'regalo_export',  '_route' => 'regalo_export',);
                }

                // regalo_sendEmail
                if (preg_match('#^/admin/regalo/(?P<id>[^/]++)/send\\-email$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'regalo_sendEmail')), array (  '_controller' => 'AppBundle\\Controller\\RegaloAdminController::sendEmailAction',  '_sonata_admin' => 'admin.regalo',  '_sonata_name' => 'regalo_sendEmail',));
                }

                if (0 === strpos($pathinfo, '/admin/regalo-pasado')) {
                    // regalo_pasado_list
                    if ($pathinfo === '/admin/regalo-pasado/list') {
                        return array (  '_controller' => 'AppBundle\\Controller\\RegaloPasadoAdminController::listAction',  '_sonata_admin' => 'admin.regalo_pasado',  '_sonata_name' => 'regalo_pasado_list',  '_route' => 'regalo_pasado_list',);
                    }

                    // regalo_pasado_create
                    if ($pathinfo === '/admin/regalo-pasado/create') {
                        return array (  '_controller' => 'AppBundle\\Controller\\RegaloPasadoAdminController::createAction',  '_sonata_admin' => 'admin.regalo_pasado',  '_sonata_name' => 'regalo_pasado_create',  '_route' => 'regalo_pasado_create',);
                    }

                    // regalo_pasado_batch
                    if ($pathinfo === '/admin/regalo-pasado/batch') {
                        return array (  '_controller' => 'AppBundle\\Controller\\RegaloPasadoAdminController::batchAction',  '_sonata_admin' => 'admin.regalo_pasado',  '_sonata_name' => 'regalo_pasado_batch',  '_route' => 'regalo_pasado_batch',);
                    }

                    // regalo_pasado_edit
                    if (preg_match('#^/admin/regalo\\-pasado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'regalo_pasado_edit')), array (  '_controller' => 'AppBundle\\Controller\\RegaloPasadoAdminController::editAction',  '_sonata_admin' => 'admin.regalo_pasado',  '_sonata_name' => 'regalo_pasado_edit',));
                    }

                    // regalo_pasado_delete
                    if (preg_match('#^/admin/regalo\\-pasado/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'regalo_pasado_delete')), array (  '_controller' => 'AppBundle\\Controller\\RegaloPasadoAdminController::deleteAction',  '_sonata_admin' => 'admin.regalo_pasado',  '_sonata_name' => 'regalo_pasado_delete',));
                    }

                    // regalo_pasado_show
                    if (preg_match('#^/admin/regalo\\-pasado/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'regalo_pasado_show')), array (  '_controller' => 'AppBundle\\Controller\\RegaloPasadoAdminController::showAction',  '_sonata_admin' => 'admin.regalo_pasado',  '_sonata_name' => 'regalo_pasado_show',));
                    }

                    // regalo_pasado_export
                    if ($pathinfo === '/admin/regalo-pasado/export') {
                        return array (  '_controller' => 'AppBundle\\Controller\\RegaloPasadoAdminController::exportAction',  '_sonata_admin' => 'admin.regalo_pasado',  '_sonata_name' => 'regalo_pasado_export',  '_route' => 'regalo_pasado_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/co')) {
                if (0 === strpos($pathinfo, '/admin/config')) {
                    // config_list
                    if ($pathinfo === '/admin/config/list') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConfiguracionAdminController::listAction',  '_sonata_admin' => 'admin.configuracion',  '_sonata_name' => 'config_list',  '_route' => 'config_list',);
                    }

                    // config_create
                    if ($pathinfo === '/admin/config/create') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConfiguracionAdminController::createAction',  '_sonata_admin' => 'admin.configuracion',  '_sonata_name' => 'config_create',  '_route' => 'config_create',);
                    }

                    // config_batch
                    if ($pathinfo === '/admin/config/batch') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConfiguracionAdminController::batchAction',  '_sonata_admin' => 'admin.configuracion',  '_sonata_name' => 'config_batch',  '_route' => 'config_batch',);
                    }

                    // config_edit
                    if (preg_match('#^/admin/config/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'config_edit')), array (  '_controller' => 'AppBundle\\Controller\\ConfiguracionAdminController::editAction',  '_sonata_admin' => 'admin.configuracion',  '_sonata_name' => 'config_edit',));
                    }

                    // config_delete
                    if (preg_match('#^/admin/config/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'config_delete')), array (  '_controller' => 'AppBundle\\Controller\\ConfiguracionAdminController::deleteAction',  '_sonata_admin' => 'admin.configuracion',  '_sonata_name' => 'config_delete',));
                    }

                    // config_show
                    if (preg_match('#^/admin/config/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'config_show')), array (  '_controller' => 'AppBundle\\Controller\\ConfiguracionAdminController::showAction',  '_sonata_admin' => 'admin.configuracion',  '_sonata_name' => 'config_show',));
                    }

                    // config_export
                    if ($pathinfo === '/admin/config/export') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConfiguracionAdminController::exportAction',  '_sonata_admin' => 'admin.configuracion',  '_sonata_name' => 'config_export',  '_route' => 'config_export',);
                    }

                    // config_myEdit
                    if ($pathinfo === '/admin/config/my-edit') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ConfiguracionAdminController::myEditAction',  '_sonata_admin' => 'admin.configuracion',  '_sonata_name' => 'config_myEdit',  '_route' => 'config_myEdit',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/comprador')) {
                    // comprador_list
                    if ($pathinfo === '/admin/comprador/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.comprador',  '_sonata_name' => 'comprador_list',  '_route' => 'comprador_list',);
                    }

                    // comprador_create
                    if ($pathinfo === '/admin/comprador/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.comprador',  '_sonata_name' => 'comprador_create',  '_route' => 'comprador_create',);
                    }

                    // comprador_batch
                    if ($pathinfo === '/admin/comprador/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.comprador',  '_sonata_name' => 'comprador_batch',  '_route' => 'comprador_batch',);
                    }

                    // comprador_edit
                    if (preg_match('#^/admin/comprador/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comprador_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.comprador',  '_sonata_name' => 'comprador_edit',));
                    }

                    // comprador_delete
                    if (preg_match('#^/admin/comprador/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comprador_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.comprador',  '_sonata_name' => 'comprador_delete',));
                    }

                    // comprador_show
                    if (preg_match('#^/admin/comprador/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comprador_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.comprador',  '_sonata_name' => 'comprador_show',));
                    }

                    // comprador_export
                    if ($pathinfo === '/admin/comprador/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.comprador',  '_sonata_name' => 'comprador_export',  '_route' => 'comprador_export',);
                    }

                    // comprador_pago_list
                    if (preg_match('#^/admin/comprador/(?P<id>[^/]++)/pago/list$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comprador_pago_list')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.comprador|admin.pago',  '_sonata_name' => 'comprador_pago_list',));
                    }

                    // comprador_pago_create
                    if (preg_match('#^/admin/comprador/(?P<id>[^/]++)/pago/create$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comprador_pago_create')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.comprador|admin.pago',  '_sonata_name' => 'comprador_pago_create',));
                    }

                    // comprador_pago_batch
                    if (preg_match('#^/admin/comprador/(?P<id>[^/]++)/pago/batch$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comprador_pago_batch')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.comprador|admin.pago',  '_sonata_name' => 'comprador_pago_batch',));
                    }

                    // comprador_pago_edit
                    if (preg_match('#^/admin/comprador/(?P<id>[^/]++)/pago/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comprador_pago_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.comprador|admin.pago',  '_sonata_name' => 'comprador_pago_edit',));
                    }

                    // comprador_pago_delete
                    if (preg_match('#^/admin/comprador/(?P<id>[^/]++)/pago/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comprador_pago_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.comprador|admin.pago',  '_sonata_name' => 'comprador_pago_delete',));
                    }

                    // comprador_pago_show
                    if (preg_match('#^/admin/comprador/(?P<id>[^/]++)/pago/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comprador_pago_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.comprador|admin.pago',  '_sonata_name' => 'comprador_pago_show',));
                    }

                    // comprador_pago_export
                    if (preg_match('#^/admin/comprador/(?P<id>[^/]++)/pago/export$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comprador_pago_export')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.comprador|admin.pago',  '_sonata_name' => 'comprador_pago_export',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/destinatario')) {
                // destinatario_list
                if ($pathinfo === '/admin/destinatario/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.destinatario',  '_sonata_name' => 'destinatario_list',  '_route' => 'destinatario_list',);
                }

                // destinatario_create
                if ($pathinfo === '/admin/destinatario/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.destinatario',  '_sonata_name' => 'destinatario_create',  '_route' => 'destinatario_create',);
                }

                // destinatario_batch
                if ($pathinfo === '/admin/destinatario/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.destinatario',  '_sonata_name' => 'destinatario_batch',  '_route' => 'destinatario_batch',);
                }

                // destinatario_edit
                if (preg_match('#^/admin/destinatario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'destinatario_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.destinatario',  '_sonata_name' => 'destinatario_edit',));
                }

                // destinatario_delete
                if (preg_match('#^/admin/destinatario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'destinatario_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.destinatario',  '_sonata_name' => 'destinatario_delete',));
                }

                // destinatario_show
                if (preg_match('#^/admin/destinatario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'destinatario_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.destinatario',  '_sonata_name' => 'destinatario_show',));
                }

                // destinatario_export
                if ($pathinfo === '/admin/destinatario/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.destinatario',  '_sonata_name' => 'destinatario_export',  '_route' => 'destinatario_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/p')) {
                if (0 === strpos($pathinfo, '/admin/pago')) {
                    // pago_list
                    if ($pathinfo === '/admin/pago/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.pago',  '_sonata_name' => 'pago_list',  '_route' => 'pago_list',);
                    }

                    // pago_create
                    if ($pathinfo === '/admin/pago/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.pago',  '_sonata_name' => 'pago_create',  '_route' => 'pago_create',);
                    }

                    // pago_batch
                    if ($pathinfo === '/admin/pago/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.pago',  '_sonata_name' => 'pago_batch',  '_route' => 'pago_batch',);
                    }

                    // pago_edit
                    if (preg_match('#^/admin/pago/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pago_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.pago',  '_sonata_name' => 'pago_edit',));
                    }

                    // pago_delete
                    if (preg_match('#^/admin/pago/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pago_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.pago',  '_sonata_name' => 'pago_delete',));
                    }

                    // pago_show
                    if (preg_match('#^/admin/pago/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pago_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.pago',  '_sonata_name' => 'pago_show',));
                    }

                    // pago_export
                    if ($pathinfo === '/admin/pago/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.pago',  '_sonata_name' => 'pago_export',  '_route' => 'pago_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/puntuacion')) {
                    // puntuacion_list
                    if ($pathinfo === '/admin/puntuacion/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.tienda',  '_sonata_name' => 'puntuacion_list',  '_route' => 'puntuacion_list',);
                    }

                    // puntuacion_create
                    if ($pathinfo === '/admin/puntuacion/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.tienda',  '_sonata_name' => 'puntuacion_create',  '_route' => 'puntuacion_create',);
                    }

                    // puntuacion_batch
                    if ($pathinfo === '/admin/puntuacion/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.tienda',  '_sonata_name' => 'puntuacion_batch',  '_route' => 'puntuacion_batch',);
                    }

                    // puntuacion_edit
                    if (preg_match('#^/admin/puntuacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'puntuacion_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.tienda',  '_sonata_name' => 'puntuacion_edit',));
                    }

                    // puntuacion_delete
                    if (preg_match('#^/admin/puntuacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'puntuacion_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.tienda',  '_sonata_name' => 'puntuacion_delete',));
                    }

                    // puntuacion_show
                    if (preg_match('#^/admin/puntuacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'puntuacion_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.tienda',  '_sonata_name' => 'puntuacion_show',));
                    }

                    // puntuacion_export
                    if ($pathinfo === '/admin/puntuacion/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.tienda',  '_sonata_name' => 'puntuacion_export',  '_route' => 'puntuacion_export',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

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

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
