<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // arii_git_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_git_homepage')), array (  '_controller' => 'Arii\\GitBundle\\Controller\\DefaultController::indexAction',));
        }

        // arii_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'arii_homepage');
            }

            return array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'arii_homepage',);
        }

        if (0 === strpos($pathinfo, '/home')) {
            // arii_home
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_home')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_Home_index
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arii_Home_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Home_index')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_Home_readme
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/readme$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Home_readme')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::readmeAction',));
            }

            // arii_Home_docs
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/docs$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Home_docs')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::docsAction',));
            }

            // arii_Core_readme
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/readme$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Core_readme')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::readmeAction',));
            }

            // html_Core_readme
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/readme\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_Core_readme')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::readme_htmlAction',));
            }

            // html_Home_readme
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/readme\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_Home_readme')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::readme_htmlAction',));
            }

            // json_Home_ribbon
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_Home_ribbon')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // arii_favorites
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/favorites$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_favorites')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_docs
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/docs$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_docs')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DocsController::indexAction',));
            }

            // xml_docs_tree
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/docs/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_docs_tree')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DocsController::treeAction',));
            }

            // json_Home_docs_ribbon
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/docs/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_Home_docs_ribbon')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DocsController::ribbonAction',));
            }

            // xml_doc_view
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/doc$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_doc_view')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::docAction',));
            }

            // html_doc_view
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/public/docs/view$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_doc_view')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DocsController::viewAction',));
            }

            // xml_menu
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_menu')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::menuAction',));
            }

            // xml_toolbar
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_toolbar')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::toolbarAction',));
            }

            // arii_About
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/about$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_About')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::aboutAction',));
            }

            // xml_modules
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/modules\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_modules')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::modulesAction',));
            }

            // arii_session_update
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/session/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_session_update')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\SessionController::updateAction',));
            }

            // arii_session_view
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/session/view$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_session_view')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\SessionController::viewAction',));
            }

            // xml_favorites
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/favorites\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_favorites')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::favoritesAction',));
            }

            // xml_favoritesPP
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/favoritesPP\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_favoritesPP')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::favoritesPPAction',));
            }

            // arii_filters
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filters$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_filters')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::indexAction',));
            }

            // json_filters_ribbon
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_filters_ribbon')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::ribbonAction',));
            }

            // arii_filters_list
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filters/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_filters_list')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::listAction',));
            }

            // xml_filter_list
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filters/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_filter_list')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::xmlAction',));
            }

            // xml_filter_menu
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filters/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_filter_menu')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::menuAction',));
            }

            // xml_filter_form
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filters/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_filter_form')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::formAction',));
            }

            // xml_filter_save
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/save\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_filter_save')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::saveAction',));
            }

            // arii_global_toolbar
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/global/toolbar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_global_toolbar')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ToolbarController::sendAction',));
            }

            // arii_global_toolbar_update
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/global/toolbar_update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_global_toolbar_update')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ToolbarController::updateAction',));
            }

            // arii_settings
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/settings$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_settings')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::settingsAction',));
            }

            // arii_form_settings_update
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/settings/form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_form_settings_update')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DBController::filter_formAction',));
            }

            // arii_grid_filter_update
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/grid$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_grid_filter_update')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DBController::filter_gridAction',));
            }

            // arii_form_filter_update
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_form_filter_update')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DBController::filter_formAction',));
            }

            // arii_toolbar_filters
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/toolbar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_toolbar_filters')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ToolbarController::filtersAction',));
            }

            // arii_toolbar_filter_add
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/toolbar_add$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_toolbar_filter_add')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ToolbarController::filter_addAction',));
            }

            // lang
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/lang/(?P<lang>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lang')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\DefaultController::langAction',));
            }

            // xml_User_filter_save
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/save$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_User_filter_save')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::saveAction',));
            }

            // xml_User_filter_delete
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/filter/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_User_filter_delete')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\FilterController::deleteAction',));
            }

            // arii_my_account
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/me$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_my_account')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::indexAction',));
            }

            // json_my_account_ribbon
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_my_account_ribbon')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::ribbonAction',));
            }

            // arii_my_account_save
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/me/save$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_my_account_save')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::saveAction',));
            }

            // arii_my_account_password
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/me/password$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_my_account_password')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::passwordAction',));
            }

            // arii_my_filters
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/filters$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_my_filters')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::sessionAction',));
            }

            // arii_my_session
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/session$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_my_session')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::sessionAction',));
            }

            // xml_my_session
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/session\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_my_session')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::session_xmlAction',));
            }

            // xml_user_toolbar
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/user/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_user_toolbar')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\UserController::toolbarAction',));
            }

            // arii_Home_audit
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Home_audit')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\AuditController::listAction',));
            }

            // xml_Home_audit_toolbar
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Home_audit_toolbar')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\AuditController::toolbarAction',));
            }

            // xml_Home_audit_list
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Home_audit_list')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\AuditController::xmlAction',));
            }

            // xml_Home_audit_chart
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/chart\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Home_audit_chart')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\AuditController::chartAction',));
            }

            // arii_Home_errors
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/errors$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Home_errors')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ErrorsController::listAction',));
            }

            // xml_Home_errors_toolbar
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Home_errors_toolbar')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ErrorsController::toolbarAction',));
            }

            // xml_Home_errors_list
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/errors/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Home_errors_list')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\ErrorsController::xmlAction',));
            }

            // xml_arii_audit_detail
            if (preg_match('#^/home/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_arii_audit_detail')), array (  '_controller' => 'Arii\\CoreBundle\\Controller\\AuditController::detailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/tools')) {
            // arii_Tools_index
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arii_Tools_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_index')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_Tools_readme
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_readme')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\DefaultController::readmeAction',));
            }

            // json_Tools_ribbon
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_Tools_ribbon')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // arii_Tools_silent
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_silent')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\SilentController::indexAction',));
            }

            // xml_Tools_silent_toolbar
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Tools_silent_toolbar')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\SilentController::toolbarAction',));
            }

            // json_Tools_silent_ribbon
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_Tools_silent_ribbon')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\SilentController::ribbonAction',));
            }

            // arii_Tools_silent_generate
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/generate$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_silent_generate')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\SilentController::generateAction',));
            }

            // arii_Tools_silent_generate_direct
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/direct$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_silent_generate_direct')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\SilentController::directAction',));
            }

            // arii_Tools_silent_files
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/files$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_silent_files')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\SilentController::filesAction',));
            }

            // arii_Tools_get_file
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/get/file$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_get_file')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\DefaultController::getfileAction',));
            }

            // arii_Tools_monitoring
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/monitoring$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_monitoring')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\MonitoringController::indexAction',));
            }

            // arii_Tools_cron
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_cron')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\CronController::indexAction',));
            }

            // arii_Tools_cron_convert
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/convert$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_cron_convert')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\CronController::convertAction',));
            }

            // xml_Tools_cron_dirlist
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/dirlist\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Tools_cron_dirlist')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\CronController::dirlistAction',));
            }

            // xml_Tools_cron_job_view
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/job/view$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Tools_cron_job_view')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\CronController::job_viewAction',));
            }

            // json_Tools_cron_upload
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/upload$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_Tools_cron_upload')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\CronController::uploadAction',));
            }

            // arii_Tools_cron_form
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_cron_form')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\CronController::formAction',));
            }

            // json_Tools_cron_ribbon
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_Tools_cron_ribbon')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\CronController::ribbonAction',));
            }

            // arii_Tools_task
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/task_scheduler$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_task')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\CronController::task_schedulerAction',));
            }

            // arii_Tools_ats_templates
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ats/templates$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_ats_templates')), array (  '_controller' => 'AriiToolsBundle:ATS:templates',));
            }

            // xml_Tools_log_server
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Tools_log_server')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\SpoolerController::log_analyzerAction',));
            }

            // arii_Tools_log_toolbar
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_log_toolbar')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\SpoolerController::toolbarAction',));
            }

            // arii_Tools_log_server
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_log_server')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\SpoolerController::logAction',));
            }

            // xml_Tools_log_dirlist
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server/dirlist\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Tools_log_dirlist')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\SpoolerController::dirlistAction',));
            }

            // json_Tools_log_upload
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server/upload\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_Tools_log_upload')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\SpoolerController::uploadAction',));
            }

            // arii_Tools_log_scheduler
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_scheduler$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Tools_log_scheduler')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\SpoolerController::log_schedulerAction',));
            }

            // xml_Tools_log_server_chart
            if (preg_match('#^/tools/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_chart\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Tools_log_server_chart')), array (  '_controller' => 'Arii\\ToolsBundle\\Controller\\SpoolerController::log_chartAction',));
            }

        }

        if (0 === strpos($pathinfo, '/jid')) {
            // arii_JID_index
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arii_JID_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_index')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::indexAction',));
            }

            // arii_JID_readme
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_readme')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::readmeAction',));
            }

            // xml_JID_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::toolbarAction',));
            }

            // json_JID_ribbon
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JID_ribbon')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // xml_JID_menu
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_menu')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::menuAction',));
            }

            // arii_JID_config
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/config$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_config')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ConfigController::indexAction',));
            }

            // html_JID_config
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/config\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_JID_config')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ConfigController::configAction',));
            }

            // arii_XML_Command
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/XML/command$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_XML_Command')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SOSController::XMLCommandAction',));
            }

            // arii_JID_jobs
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_jobs')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::indexAction',));
            }

            // arii_JID_jobs_index
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_jobs_index')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::indexAction',));
            }

            // xml_JID_jobs_tree
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_jobs_tree')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::treeAction',));
            }

            // xml_JID_jobs_grid
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_jobs_grid')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::gridAction',));
            }

            // xml_JID_jobs_grid_menu
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/grid_menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_jobs_grid_menu')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::grid_menuAction',));
            }

            // json_JID_jobs_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JID_jobs_form')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::formAction',));
            }

            // xml_JID_jobs_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_jobs_form')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::form2Action',));
            }

            // xml_JID_jobs_form_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form_toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_jobs_form_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::form_toolbarAction',));
            }

            // arii_JID_jobs_treegrid
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/treegrid$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_jobs_treegrid')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::indexTreegridAction',));
            }

            // xml_JID_jobs_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_jobs_toolbar')), array (  '_controller' => 'AriiJIDBundle:xJobs:toolbar',));
            }

            // xml_JID_jobs_folder_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/folder_toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_jobs_folder_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::folder_toolbarAction',));
            }

            // xml_JID_jobs_grid_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/grid_toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_jobs_grid_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::grid_toolbarAction',));
            }

            // xml_JID_jobs_bar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/bar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_jobs_bar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::barAction',));
            }

            // xml_JID_jobs_pie
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_jobs_pie')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::pieAction',));
            }

            // xml_JID_jobs_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/timeline\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_jobs_timeline')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobsController::timelineAction',));
            }

            // xml_JID_job_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_job_form')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobController::formAction',));
            }

            // xml_JID_job_params
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/params\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_job_params')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobController::paramsAction',));
            }

            // xml_JID_job_params_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/params/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_job_params_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobController::params_toolbarAction',));
            }

            // xml_JID_job_log
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/log\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_job_log')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobController::logAction',));
            }

            // xml_JID_job_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/history\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_job_history')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\JobController::historyAction',));
            }

            // arii_JID_history_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_history_job')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::jobAction',));
            }

            // arii_JID_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_orders')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::indexAction',));
            }

            // xml_JID_orders_grid
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_grid')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::gridAction',));
            }

            // xml_JID_orders_grid_menu
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/grid_menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_grid_menu')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::grid_menuAction',));
            }

            // xml_JID_orders_grid_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/grid_toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_grid_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::grid_toolbarAction',));
            }

            // xml_JID_orders_folder_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/folder_toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_folder_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::folder_toolbarAction',));
            }

            // arii_JID_orders_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_orders_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::listAction',));
            }

            // xml_JID_orders_tree
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_tree')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::treeAction',));
            }

            // json_JID_orders_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/form\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JID_orders_form')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::formAction',));
            }

            // xml_JID_orders_form_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/form_toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_form_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::form_toolbarAction',));
            }

            // xml_JID_orders_chain_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/chain_toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_chain_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::chain_toolbarAction',));
            }

            // arii_JID_toolbar_purge_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/purge_job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_toolbar_purge_job')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_purge_jobAction',));
            }

            // arii_JID_toolbar_job_why
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/job_why$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_toolbar_job_why')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_job_whyAction',));
            }

            // arii_JID_orders_treegrid
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/treegrid$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_orders_treegrid')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::index_treegridAction',));
            }

            // xml_JID_orders_menu
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_menu')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::menuAction',));
            }

            // xml_JID_orders_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::toolbarAction',));
            }

            // arii_JID_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_order')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::indexAction',));
            }

            // svg_JID_process_steps
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/steps\\.svg$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'svg_JID_process_steps')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::graphvizAction',));
            }

            // arii_JID_order_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_order_history')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::historyPageAction',));
            }

            // xml_JID_order_chart
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/chart\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_order_chart')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::chartAction',));
            }

            // xml_JID_order_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_order_form')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::formAction',));
            }

            // xml_JID_order_toolbar_params
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/toolbar_params\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_order_toolbar_params')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::toolbar_paramsAction',));
            }

            // xml_JID_order_params
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/params\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_order_params')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::paramsAction',));
            }

            // xml_JID_order_steps
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/steps\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_order_steps')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::stepsAction',));
            }

            // xml_JID_order_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/history\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_order_history')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::historyAction',));
            }

            // xml_JID_order_log
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/log\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_order_log')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrderController::logAction',));
            }

            // arii_JID_orders_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/timeline$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_orders_timeline')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::timelineAction',));
            }

            // arii_JID_orders_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/activities$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_orders_last')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::activitiesAction',));
            }

            // arii_JID_orders_charts
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/charts$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_orders_charts')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::chartsAction',));
            }

            // xml_JID_orders_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::list_xmlAction',));
            }

            // xml_JID_orders_pie
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_pie')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::pieAction',));
            }

            // xml_JID_orders_bar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/bar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_bar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::barAction',));
            }

            // xml_JID_orders_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/activities\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_last')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::lastAction',));
            }

            // arii_JID_order_log
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/log$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_order_log')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::order_logAction',));
            }

            // arii_JID_order_log_upload
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/log/upload$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_order_log_upload')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::order_log_uploadAction',));
            }

            // arii_JID_toolbar_start_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_order$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_toolbar_start_order')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_start_orderAction',));
            }

            // xml_JID_start_order_parameters
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/start_order/parameters$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_start_order_parameters')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::start_order_parametersAction',));
            }

            // xml_JID_toolbar_order_param
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/param\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_toolbar_order_param')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_order_paramAction',));
            }

            // xml_JID_toolbar_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/toolbar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_toolbar_orders')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::toolbarAction',));
            }

            // arii_JID_order_doc
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/doc$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_order_doc')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::docAction',));
            }

            // arii_JID_order_purge
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/purge$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_order_purge')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::purgeAction',));
            }

            // arii_JID_toolbar_purge_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/purge/toolbar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_toolbar_purge_order')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_purge_orderAction',));
            }

            // arii_JID_orders_toolbar_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/timeline/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_orders_toolbar_timeline')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::toolbar_timelineAction',));
            }

            // xml_JID_orders_toolbar_activities
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/activities/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_orders_toolbar_activities')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::toolbar_activitiesAction',));
            }

            // arii_JID_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_timeline')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::indexAction',));
            }

            // arii_JID_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/activities$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_last')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::lastAction',));
            }

            // xml_JID_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/activities/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_last')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::last_xmlAction',));
            }

            // arii_JID_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::defaultAction',));
            }

            // arii_JID_toolbar_footer
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/footer$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_toolbar_footer')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::footerAction',));
            }

            // arii_JID_toolbar_add_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/add_order$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_toolbar_add_order')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_add_orderAction',));
            }

            // arii_JID_toolbar_start_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_toolbar_start_orders')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_start_ordersAction',));
            }

            // arii_JID_orders_selected_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/selected_orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_orders_selected_orders')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\OrdersController::selected_ordersAction',));
            }

            // xml_JID_toolbar_global
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/global$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_toolbar_global')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::globalAction',));
            }

            // arii_JID_timeline_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_timeline_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::toolbarAction',));
            }

            // arii_JID_history_timeline_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/timeline/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_history_timeline_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::toolbar_timelineAction',));
            }

            // json_JID_spoolers_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/form\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JID_spoolers_form')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::formAction',));
            }

            // xml_JID_spooler_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_spooler_form')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::formAction',));
            }

            // xml_JID_spooler_form_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/form_toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_spooler_form_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::form_toolbarAction',));
            }

            // xml_JID_spooler_tasks
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/tasks\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_spooler_tasks')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::tasksAction',));
            }

            // xml_JID_spooler_task_params
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/task_params\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_spooler_task_params')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::task_paramsAction',));
            }

            // xml_JID_spooler_jobs
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/jobs\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_spooler_jobs')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::jobsAction',));
            }

            // xml_JID_spooler_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/orders\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_spooler_orders')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::ordersAction',));
            }

            // arii_JID_spooler_delete
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_spooler_delete')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::deleteAction',));
            }

            // arii_JID_history_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/activities$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_history_last')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::activitiesAction',));
            }

            // xml_JID_toolbar_activities
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/activities/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_toolbar_activities')), array (  '_controller' => 'AriiJIDBundle:Activities:toolbar',));
            }

            // xml_JID_menu_activities
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/activities/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_menu_activities')), array (  '_controller' => 'AriiJIDBundle:Activities:menu',));
            }

            // arii_JID_processes
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/processes$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_processes')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessesController::indexAction',));
            }

            // xml_JID_processes_tree
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/processes/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_processes_tree')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessesController::treeAction',));
            }

            // xml_JID_processes_steps
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/processes/steps\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_processes_steps')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessesController::stepsAction',));
            }

            // svg_JID_processes_steps
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/processes/steps\\.svg$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'svg_JID_processes_steps')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessesController::graphvizAction',));
            }

            // arii_JID_chains
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_chains')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::indexAction',));
            }

            // arii_JID_chains_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_chains_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::listAction',));
            }

            // arii_JID_chains_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/timeline$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_chains_timeline')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::timelineAction',));
            }

            // arii_JID_chains_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/activities$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_chains_last')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::activitiesAction',));
            }

            // arii_JID_menu_chains
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/chains$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_menu_chains')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::menuAction',));
            }

            // xml_JID_toolbar_chains
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/toolbar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_toolbar_chains')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::toolbarAction',));
            }

            // xml_JID_chains_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_chains_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::list_xmlAction',));
            }

            // xml_JID_chains_tree
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_chains_tree')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ChainsController::treeAction',));
            }

            // arii_JID_toolbar_start_chains
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_chains$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_toolbar_start_chains')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_start_chainsAction',));
            }

            // arii_JID_process
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_process')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessController::indexAction',));
            }

            // arii_JID_process_graphviz
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process/graphviz$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_process_graphviz')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessController::graphvizAction',));
            }

            // xml_JID_toolbar_process
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process/toolbar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_toolbar_process')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ProcessController::toolbarAction',));
            }

            // arii_JID_detail_future_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/next$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_detail_future_job')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::next_jobAction',));
            }

            // arii_JID_detail_future_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/next$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_detail_future_order')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::next_orderAction',));
            }

            // arii_JID_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_history')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::indexAction',));
            }

            // arii_JID_history_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_history_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::listAction',));
            }

            // arii_JID_history_charts
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/charts$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_history_charts')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::chartsAction',));
            }

            // xml_JID_history_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_history_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::list_xmlAction',));
            }

            // xml_JID_history_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/history\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_history_history')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::list_xmlAction',  'history' => 100,));
            }

            // xml_JID_job_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job_list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_job_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::job_listAction',));
            }

            // arii_JID_history_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/timeline$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_history_timeline')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::timelineAction',));
            }

            // xml_JID_history_pie_ordered
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/pie_ordered\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_history_pie_ordered')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::pieAction',  'ordered' => 1,));
            }

            // xml_JID_history_pie_states
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/states\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_history_pie_states')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::statesAction',));
            }

            // xml_JID_timeline_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/history\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_timeline_history')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::historyAction',));
            }

            // xml_JID_timeline_jobs
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/jobs\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_timeline_jobs')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::jobsAction',));
            }

            // xml_JID_timeline_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/orders\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_timeline_orders')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::ordersAction',));
            }

            // xml_JID_timeline_events
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/events\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_timeline_events')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::eventsAction',));
            }

            // xml_JID_timeline_history_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/orders\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_timeline_history_orders')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::history_ordersAction',));
            }

            // xml_JID_timeline_ordered_jobs
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/ordered_jobs\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_timeline_ordered_jobs')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::ordered_jobsAction',));
            }

            // xml_JID_toolbar_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_toolbar_history')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::toolbarAction',));
            }

            // arii_JID_history_purge
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/purge$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_history_purge')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::purgeAction',));
            }

            // arii_JID_job_doc
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/doc$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_job_doc')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::docAction',));
            }

            // arii_JID_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_planned')), array (  '_controller' => 'AriiJIDBundle:Planned:index',));
            }

            // arii_JID_planned_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_planned_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::listAction',));
            }

            // arii_JID_planned_charts
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/charts$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_planned_charts')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::chartsAction',));
            }

            // xml_JID_planned_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_planned_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::list_xmlAction',));
            }

            // arii_JID_planned_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/timeline$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_planned_timeline')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::timelineAction',));
            }

            // arii_JID_planned_activities
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/activities$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_planned_activities')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::activitiesAction',));
            }

            // arii_JID_planned_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/activities$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_planned_last')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::activitiesAction',));
            }

            // xml_JID_planned_pie
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_planned_pie')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::pieAction',));
            }

            // xml_JID_planned_bar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/bar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_planned_bar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::barAction',));
            }

            // xml_JID_planned_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/timeline\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_planned_timeline')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::timeline_xmlAction',));
            }

            // xml_JID_planned_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_planned_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::toolbarAction',));
            }

            // xml_JID_planned_toolbar_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/timeline/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_planned_toolbar_timeline')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::toolbar_timelineAction',));
            }

            // xml_JID_planned_toolbar_activities
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/activities/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_planned_toolbar_activities')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::toolbar_activitiesAction',));
            }

            // xml_JID_planned_menu
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_planned_menu')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::menuAction',));
            }

            // xml_JID_timeline_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/planned\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_timeline_planned')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\TimelineController::plannedAction',));
            }

            // ical_JID_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/arii\\.ical$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ical_JID_planned')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::icalAction',));
            }

            // arii_JID_spoolers
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_spoolers')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::indexAction',));
            }

            // arii_JID_spoolers_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_spoolers_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::listAction',));
            }

            // arii_JID_spoolers_charts
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/charts$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_spoolers_charts')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::chartsAction',));
            }

            // arii_JID_spooler_update
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_spooler_update')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::UpdateAction',));
            }

            // xml_JID_spoolers_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_spoolers_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::list_xmlAction',));
            }

            // xml_JID_spoolers_pie
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_spoolers_pie')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::pieAction',));
            }

            // xml_JID_spoolers_bar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/bar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_spoolers_bar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::barAction',));
            }

            // xml_JID_spoolers_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/timeline\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_spoolers_timeline')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::timeline_xmlAction',));
            }

            // xml_JID_spooler_log
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/log\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_spooler_log')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::logAction',));
            }

            // xml_JID_spoolers_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_spoolers_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::toolbarAction',));
            }

            // xml_JID_spoolers_menu
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_spoolers_menu')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolersController::menuAction',));
            }

            // arii_JID_clusters
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/clusters$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_clusters')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ClustersController::indexAction',));
            }

            // xml_JID_clusters_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/clusters/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_clusters_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ClustersController::list_xmlAction',));
            }

            // xml_JID_clusters_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/clusters/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_clusters_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ClustersController::toolbarAction',));
            }

            // arii_JID_events
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_events')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::indexAction',));
            }

            // arii_JID_events_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/timeline$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_events_timeline')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::timelineAction',));
            }

            // arii_JID_events_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/activities$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_events_last')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::activitiesAction',));
            }

            // xml_JID_events_pie
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_events_pie')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::pieAction',));
            }

            // xml_JID_events
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/events\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_events')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::eventsAction',));
            }

            // html_JID_event_detail
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/event/detail\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_JID_event_detail')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::detailAction',));
            }

            // xml_JID_events_toolbar_activities
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/activities/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_events_toolbar_activities')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::toolbar_activitiesAction',));
            }

            // xml_JID_events_toolbar_timeline
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/timeline/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_events_toolbar_timeline')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::toolbar_timelineAction',));
            }

            // xml_JID_events_last
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/events/activities\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_events_last')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\EventsController::lastAction',));
            }

            // arii_JID_messages
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_messages')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::indexAction',));
            }

            // arii_JID_messages_index
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_messages_index')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::indexAction',));
            }

            // xml_JID_messages_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_messages_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::toolbarAction',));
            }

            // xml_JID_messages_pie
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_messages_pie')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::pieAction',));
            }

            // xml_JID_messages_bar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages/bar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_messages_bar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::barAction',));
            }

            // json_JID_messages_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages/form\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JID_messages_form')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::formAction',));
            }

            // xml_JID_messages_spooler
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages/spooler\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_messages_spooler')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::spoolerAction',));
            }

            // xml_JID_messages_grid
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/messages/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_messages_grid')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::messagesAction',));
            }

            // xml_JID_message
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/message\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_message')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MessagesController::messageAction',));
            }

            // arii_JID_detail_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_detail_order')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::orderAction',));
            }

            // arii_JID_detail_order_plan
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/plan$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_detail_order_plan')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::planAction',));
            }

            // arii_JID_detail_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_detail_planned')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::plannedAction',));
            }

            // arii_JID_planned_log
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/log$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_planned_log')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::planned_logAction',));
            }

            // arii_JID_detail_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_detail_job')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::jobAction',));
            }

            // arii_JID_job_log
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/log$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_job_log')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::job_logAction',));
            }

            // arii_JID_job_log_upload
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/log/upload$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_job_log_upload')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::job_log_uploadAction',));
            }

            // arii_JID_start_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/start$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_start_job')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CmdController::startjobAction',));
            }

            // arii_JID_db_daysschedule
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/db/daysschedule$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_db_daysschedule')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::days_scheduleAction',));
            }

            // arii_JID_db_reorg
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/db/reorg$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_db_reorg')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::reorgAction',));
            }

            // arii_JID_ajax_job_info
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ajax/job_info$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_ajax_job_info')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\AjaxController::job_infoAction',));
            }

            // arii_JID_form_start_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/start_job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_form_start_job')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::start_jobAction',));
            }

            // arii_JID_form_start_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/start_order$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_form_start_order')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::start_orderAction',));
            }

            // arii_JID_form_add_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/add_order$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_form_add_order')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::add_orderAction',));
            }

            // arii_JID_select_start_state
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/select_start_state$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_select_start_state')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::select_start_stateAction',));
            }

            // arii_JID_select_end_state
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/select_end_state$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_select_end_state')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::select_end_stateAction',));
            }

            // arii_JID_form_kill_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/kill_job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_form_kill_job')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::kill_jobAction',));
            }

            // arii_JID_form_stop_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/stop_job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_form_stop_job')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::stop_jobAction',));
            }

            // arii_JID_form_unstop_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/unstop_job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_form_unstop_job')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::unstop_jobAction',));
            }

            // arii_JID_grid_history_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/grid_history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_grid_history_job')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::grid_historyAction',));
            }

            // arii_JID_grid_history_order
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/grid_order_history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_grid_history_order')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::grid_order_historyAction',));
            }

            // arii_JID_chart_history_job
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/chart_history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_chart_history_job')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DetailController::chart_historyAction',));
            }

            // arii_JID_timeline_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_timeline_history')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::timeline_historyAction',));
            }

            // arii_JID_radar_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/radar_chart/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_radar_history')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::radar_historyAction',));
            }

            // arii_JID_bar3_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/bar3_chart/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_bar3_history')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::bar3_historyAction',));
            }

            // arii_JID_last_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/last_chart/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_last_history')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::last_historyAction',));
            }

            // arii_JID_bar_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/bar_chart/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_bar_history')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::bar_historyAction',));
            }

            // arii_JID_pie_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/pie_chart/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_pie_orders')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::pie_ordersAction',));
            }

            // arii_JID_radar_orders
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/radar_chart/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_radar_orders')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::radar_ordersAction',));
            }

            // arii_JID_pie_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/pie_chart/planned$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_pie_planned')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::pie_plannedAction',));
            }

            // arii_JID_radar_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/radar_chart/planned$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_radar_planned')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::radar_plannedAction',));
            }

            // arii_JID_pie_messages
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/pie_chart/messages$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_pie_messages')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBGraphController::pie_messagesAction',));
            }

            // arii_JID_menu_history
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_menu_history')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\HistoryController::menuAction',));
            }

            // arii_JID_menu_planned
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/planned$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_menu_planned')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MenuController::plannedAction',));
            }

            // arii_JID_menu_messages
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_menu_messages')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\MenuController::messagesAction',));
            }

            // arii_JID_toolbar_job_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/job_list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_toolbar_job_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_job_listAction',));
            }

            // arii_JID_toolbar_refresh
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/refresh$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_toolbar_refresh')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_refreshAction',));
            }

            // arii_JID_toolbar_schedule_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/schedule_list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_toolbar_schedule_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\ToolbarController::toolbar_schedule_listAction',));
            }

            // arii_JID_select_state
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/select_state$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_select_state')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\FormController::select_stateAction',));
            }

            // arii_JID_doc
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/doc$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_doc')), array (  '_controller' => 'AriiJIDBundle:Doc:default',));
            }

            // arii_JID_requests
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_requests')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RequestsController::indexAction',));
            }

            // xml_JID_requests_list
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_requests_list')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RequestsController::listAction',));
            }

            // arii_JID_requests_result
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/result\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_requests_result')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RequestsController::resultAction',));
            }

            // arii_JID_requests_summary
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/summary\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_requests_summary')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RequestsController::summaryAction',));
            }

            // arii_JID_silent
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_silent')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SilentController::indexAction',));
            }

            // xml_JID_silent_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_silent_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SilentController::toolbarAction',));
            }

            // json_JID_silent_ribbon
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JID_silent_ribbon')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SilentController::ribbonAction',));
            }

            // arii_JID_silent_generate
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/generate$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_silent_generate')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SilentController::generateAction',));
            }

            // arii_JID_silent_generate_direct
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/direct$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_silent_generate_direct')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SilentController::directAction',));
            }

            // arii_JID_silent_files
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/silent/files$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_silent_files')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SilentController::filesAction',));
            }

            // arii_JID_get_file
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/get/file$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_get_file')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DefaultController::getfileAction',));
            }

            // arii_JID_monitoring
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/monitoring$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_monitoring')), array (  '_controller' => 'AriiJIDBundle:Monitoring:index',));
            }

            // arii_JID_cron
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_cron')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::indexAction',));
            }

            // arii_JID_cron_convert
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/convert$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_cron_convert')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::convertAction',));
            }

            // xml_JID_cron_dirlist
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/dirlist\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_cron_dirlist')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::dirlistAction',));
            }

            // xml_JID_cron_job_view
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/job/view$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_cron_job_view')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::job_viewAction',));
            }

            // json_JID_cron_upload
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/upload$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JID_cron_upload')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::uploadAction',));
            }

            // arii_JID_cron_form
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_cron_form')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::formAction',));
            }

            // json_JID_cron_ribbon
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/cron/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JID_cron_ribbon')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::ribbonAction',));
            }

            // arii_JID_task
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/task_scheduler$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_task')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\CronController::task_schedulerAction',));
            }

            // xml_JID_log_server
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_log_server')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::log_analyzerAction',));
            }

            // arii_JID_log_toolbar
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_log_toolbar')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::toolbarAction',));
            }

            // arii_JID_log_server
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_log_server')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::logAction',));
            }

            // xml_JID_log_dirlist
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server/dirlist\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_log_dirlist')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::dirlistAction',));
            }

            // json_JID_log_upload
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_server/upload\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JID_log_upload')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::uploadAction',));
            }

            // arii_JID_log_scheduler
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_scheduler$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_log_scheduler')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::log_schedulerAction',));
            }

            // xml_JID_log_server_chart
            if (preg_match('#^/jid/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/log_chart\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JID_log_server_chart')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\SpoolerController::log_chartAction',));
            }

        }

        if (0 === strpos($pathinfo, '/public')) {
            // rss_JID_history_job
            if ($pathinfo === '/public/jobs.atom') {
                return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RSSController::jobsAction',  '_route' => 'rss_JID_history_job',);
            }

            // rss_JID_history_orders
            if ($pathinfo === '/public/orders.atom') {
                return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RSSController::ordersAction',  '_route' => 'rss_JID_history_orders',);
            }

            // rss_JID_history_chains
            if ($pathinfo === '/public/chains.atom') {
                return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\RSSController::chainsAction',  '_route' => 'rss_JID_history_chains',);
            }

            // ical_JID_waiting
            if ($pathinfo === '/public/waiting.ical') {
                return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\PlannedController::icalAction',  '_route' => 'ical_JID_waiting',);
            }

            // png_JID_gantt
            if ($pathinfo === '/public/gantt') {
                return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\GanttController::imageAction',  '_route' => 'png_JID_gantt',);
            }

        }

        // nagios_JID_jobs
        if ($pathinfo === '/nagios/jobs') {
            return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\NagiosController::jobsAction',  '_route' => 'nagios_JID_jobs',);
        }

        if (0 === strpos($pathinfo, '/joe')) {
            // arii_JOE_index
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arii_JOE_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_index')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_JOE_readme
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arii_JOE_readme');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_readme')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::readmeAction',));
            }

            // json_JOE_ribbon
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JOE_ribbon')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // xml_JOE_menu
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_menu')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::menuAction',));
            }

            // xml_JOE_toolbar
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_toolbar')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::toolbarAction',));
            }

            // xml_JOE_tree
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_tree')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::treeAction',));
            }

            // arii_JOE_load
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/load$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_load')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\LoadController::indexAction',));
            }

            // json_JOE_load_ribbon
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/load/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JOE_load_ribbon')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\LoadController::ribbonAction',));
            }

            // xml_JOE_load_menu
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/load/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_load_menu')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\LoadController::menuAction',));
            }

            // xml_JOE_load_toolbar
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/load/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_load_toolbar')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\LoadController::toolbarAction',));
            }

            // xml_JOE_load_tree
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/load/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_load_tree')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\LoadController::treeAction',));
            }

            // xml_JOE_load_grid
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/load/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_load_grid')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\LoadController::gridCheckAction',));
            }

            // arii_JOE_load_sync
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/load/sync$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_load_sync')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\LoadController::syncAction',));
            }

            // arii_JOE_deploy
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/deploy$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_deploy')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\LoadController::indexAction',));
            }

            // json_JOE_deploy_ribbon
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/deploy/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JOE_deploy_ribbon')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\LoadController::ribbonAction',));
            }

            // xml_JOE_deploy_menu
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/deploy/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_deploy_menu')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\LoadController::menuAction',));
            }

            // xml_JOE_deploy_toolbar
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/deploy/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_deploy_toolbar')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\LoadController::toolbarAction',));
            }

            // xml_JOE_deploy_tree
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/deploy/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_deploy_tree')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\LoadController::treeAction',));
            }

            // arii_JOE_deploy_sync
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/deploy/sync$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_deploy_sync')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\LoadController::syncAction',));
            }

            // xml_JOE_folder_tree
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/folder/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_folder_tree')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\FolderController::treeAction',));
            }

            // xml_JOE_folder_menu
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/folder/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_folder_menu')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\FolderController::menuAction',));
            }

            // arii_JOE_job
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_job')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\JobController::indexAction',));
            }

            // arii_JOE_job_edit
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_job_edit')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\JobController::editAction',));
            }

            // arii_JOE_job_save
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/save$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_job_save')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\JobController::saveAction',));
            }

            // xml_JOE_job_edit_toolbar
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/edit/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_job_edit_toolbar')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\JobController::toolbarAction',));
            }

            // arii_JOE_job_create
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_job_create')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\JobController::createAction',));
            }

            // arii_JOE_chain
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chain$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_chain')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\ChainController::indexAction',));
            }

            // arii_JOE_chain_edit
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chain/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_chain_edit')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\ChainController::editAction',));
            }

            // arii_JOE_order
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_order')), array (  '_controller' => 'AriiJOEBundle:Order:index',));
            }

            // arii_JOE_order_edit
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_order_edit')), array (  '_controller' => 'AriiJOEBundle:Order:edit',));
            }

            // xml_JOE_menu_tree
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menutree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_menu_tree')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::menutreeAction',));
            }

            // ajax_JOE_folder_sync
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/folder_sync$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_JOE_folder_sync')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\FolderController::syncAction',));
            }

            // xml_JOE_folder_live
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/folder\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_folder_live')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\FolderController::publishAction',));
            }

            // xml_JOE_hot_folders
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/hot_folders\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_hot_folders')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\FolderController::hot_foldersAction',));
            }

            // xml_JOE_toolbar_folders
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/hot_folders/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_toolbar_folders')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\FolderController::toolbarAction',));
            }

            // arii_JOE_file_view
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/file/view$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_file_view')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\FolderController::file_viewAction',));
            }

            // arii_JOE_jobs
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_jobs')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\JobsController::indexAction',));
            }

            // xml_JOE_jobs
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_jobs')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\JobsController::treegridAction',));
            }

            // arii_JOE_tasks
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/tasks$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_tasks')), array (  '_controller' => 'AriiJOEBundle:Tasks:index',));
            }

            // arii_JOE_windows_edit
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/windows/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_windows_edit')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\CommandController::windows_shellAction',));
            }

            // arii_JOE_task
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/task$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_task')), array (  '_controller' => 'AriiJOEBundle:Task:index',));
            }

            // arii_JOE_task_edit
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/task/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_task_edit')), array (  '_controller' => 'AriiJOEBundle:Task:edit',));
            }

            // arii_JOE_chains
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_chains')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\ChainsController::indexAction',));
            }

            // xml_JOE_chain_toolbar
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chain/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOE_chain_toolbar')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\ChainController::toolbarAction',));
            }

            // arii_JOE_globalmenu
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/globalmenu$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_globalmenu')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::globalmenuAction',));
            }

            // arii_JOE_contextmenu
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/contextmenu$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_contextmenu')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::contextmenuAction',));
            }

            // arii_JOE_schedules
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/schedules$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_schedules')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_JOE_resources
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/locks$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_resources')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_JOE_agents
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process_classes$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_agents')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_JOE_notifications
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/notifications$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_notifications')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_JOE_connection
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connections/server(?:/(?P<mode>new|edit))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_connection')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\ConnectionController::editAction',  'mode' => 'new',));
            }

            // arii_JOE_connections
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connections$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_connections')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\ConnectionController::indexAction',));
            }

            // arii_JOE_database
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connections/database(?:/(?P<mode>new|edit))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_database')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DatabaseController::editAction',  'mode' => 'new',));
            }

            // arii_JOE_mail
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connections/mail(?:/(?P<mode>new|edit))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_mail')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\MailController::editAction',  'mode' => 'new',));
            }

            // arii_JOE_jobtypes
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobtypes$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_jobtypes')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::treemenuAction',));
            }

            // arii_JOE_job_chains
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job_chains$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_job_chains')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_JOE_orders
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_orders')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_JOE_form
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_form')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\FormController::formAction',));
            }

            // db_joe_jobs
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/db/jobs$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'db_joe_jobs')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DBController::jobsAction',));
            }

            // db_joe_connections_grid
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connections/grid$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'db_joe_connections_grid')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DBController::connections_gridAction',));
            }

            // db_joe_connection_form
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connection/form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'db_joe_connection_form')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DBController::connections_formAction',));
            }

            // arii_joe_toolbar_list
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_joe_toolbar_list')), array (  '_controller' => 'AriiJOEBundle:Toolbar:list',));
            }

            // arii_JOE_XML_job
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/xml/job/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_XML_job')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\XMLController::jobAction',));
            }

            // db_joe_queues_select
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/queues/tree$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'db_joe_queues_select')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\DBController::queues_treeAction',));
            }

            // arii_JOE_parameters
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/params$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_parameters')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\ParamsController::gridAction',));
            }

            // arii_JOE_queues
            if (preg_match('#^/joe/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/queues$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOE_queues')), array (  '_controller' => 'Arii\\JOEBundle\\Controller\\QueuesController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/mft')) {
            // arii_MFT_index
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arii_MFT_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_index')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_MFT_readme
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_readme')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DefaultController::readmeAction',));
            }

            // json_MFT_ribbon
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_MFT_ribbon')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // json_MFT_ribbon_edit
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon_edit\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_MFT_ribbon_edit')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DefaultController::ribbon_editAction',));
            }

            // xml_MFT_toolbar
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_toolbar')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DefaultController::toolbarAction',));
            }

            // xml_MFT_status_grid
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/status/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_status_grid')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DefaultController::gridAction',));
            }

            // xml_MFT_status_pie
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/status/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_status_pie')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DefaultController::pieAction',));
            }

            // xml_MFT_history_grid
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_history_grid')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\HistoryController::gridAction',));
            }

            // xml_MFT_status_grid_menu
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/status/grid_menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_status_grid_menu')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DefaultController::contextmenuAction',));
            }

            // svg_MFT_history_uml
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history/uml\\.svg$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'svg_MFT_history_uml')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\GraphvizController::historyAction',));
            }

            // json_MFT_status_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/status/form\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_MFT_status_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\StatusController::structAction',));
            }

            // xml_MFT_status_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/status/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_status_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\StatusController::formAction',));
            }

            // html_MFT_status_save
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/status/save\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_MFT_status_save')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\StatusController::saveAction',));
            }

            // arii_MFT_transmissions
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transmissions$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_transmissions')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransmissionsController::indexAction',));
            }

            // xml_MFT_transmissions_grid
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transmissions/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_transmissions_grid')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransmissionsController::gridAction',));
            }

            // xml_MFT_transmission_history
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transmission/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_transmission_history')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransmissionController::gridAction',));
            }

            // arii_MFT_deliveries
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/deliveries$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_deliveries')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DeliveriesController::indexAction',));
            }

            // xml_MFT_deliveries_grid
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/deliveries/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_deliveries_grid')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DeliveriesController::gridAction',));
            }

            // xml_MFT_deliveries_toolbar
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/deliveries/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_deliveries_toolbar')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DeliveriesController::toolbarAction',));
            }

            // xml_MFT_deliveries_pie
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/deliveries/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_deliveries_pie')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DeliveriesController::pieAction',));
            }

            // json_MFT_delivery_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/delivery/form\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_MFT_delivery_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DeliveryController::form_structAction',));
            }

            // xml_MFT_delivery_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/delivery/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_delivery_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DeliveryController::formAction',));
            }

            // html_MFT_delivery_log
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/delivery/log\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_MFT_delivery_log')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DeliveryController::logAction',));
            }

            // html_MFT_delivery_delete
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/delivery/delete\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_MFT_delivery_delete')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DeliveryController::deleteAction',));
            }

            // arii_MFT_operations
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operations$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_operations')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationsController::indexAction',));
            }

            // xml_MFT_operations_grid
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operations/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_operations_grid')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationsController::gridAction',));
            }

            // xml_MFT_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operations/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationsController::formAction',));
            }

            // xml_MFT_form_options
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operations/form/options\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_form_options')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationsController::form_optionsAction',));
            }

            // xml_MFT_form_source
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operations/form/source\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_form_source')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationsController::form_sourceAction',));
            }

            // xml_MFT_form_target
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operations/form/target\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_form_target')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationsController::form_targetAction',));
            }

            // json_MFT_operation_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operation/form\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_MFT_operation_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationController::structAction',));
            }

            // xml_MFT_operation_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operation/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_operation_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationController::formAction',));
            }

            // json_MFT_operation_options
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operation/form/options\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_MFT_operation_options')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationController::struct_optionsAction',));
            }

            // xml_MFT_operation_options
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operation/form/options\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_operation_options')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationController::optionsAction',));
            }

            // json_MFT_operation_connection
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operation/connection\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_MFT_operation_connection')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationController::struct_connectionAction',));
            }

            // xml_MFT_operation_connection
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operation/connection\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_operation_connection')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationController::connectionAction',));
            }

            // xml_MFT_connections_select
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operation/connection/select\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_connections_select')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationController::connectionsSelectAction',));
            }

            // xml_MFT_parameters_select
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operation/connection/parameters/select\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_parameters_select')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationController::parametersSelectAction',));
            }

            // xml_MFT_operation_toolbar
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operation/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_operation_toolbar')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationController::toolbarAction',));
            }

            // xml_MFT_operation_history
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operation/history\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_operation_history')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationController::historyAction',));
            }

            // html_MFT_operation_save
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operation/save\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_MFT_operation_save')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationController::saveAction',));
            }

            // html_MFT_operation_delete
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operation/delete\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_MFT_operation_delete')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationController::deleteAction',));
            }

            // arii_MFT_partners
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partners$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_partners')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnersController::indexAction',));
            }

            // xml_MFT_partners_grid
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partners/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_partners_grid')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnersController::gridAction',));
            }

            // xml_MFT_partners_list
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partners/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_partners_list')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnersController::listAction',));
            }

            // xml_MFT_partners_toolbar
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partners/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_partners_toolbar')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnersController::toolbarAction',));
            }

            // xml_MFT_partners_select
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partners/select\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_partners_select')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnersController::selectAction',));
            }

            // xml_MFT_partners_grid_menu
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partners/grid_menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_partners_grid_menu')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnersController::contextmenuAction',));
            }

            // xml_MFT_partners_tree
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partners/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_partners_tree')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnersController::treeAction',));
            }

            // arii_MFT_partner
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partner$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_partner')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnerController::indexAction',));
            }

            // xml_MFT_partner_toolbar
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partner/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_partner_toolbar')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnerController::toolbarAction',));
            }

            // json_MFT_partner_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partner/form\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_MFT_partner_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnerController::structAction',));
            }

            // xml_MFT_partner_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partner/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_partner_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnerController::formAction',));
            }

            // txt_MFT_partner_config
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partner/config\\.txt$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'txt_MFT_partner_config')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnerController::configAction',));
            }

            // html_MFT_partner_delete
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partner/delete\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_MFT_partner_delete')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnerController::deleteAction',));
            }

            // html_MFT_partner_save
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/partner/save\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_MFT_partner_save')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\PartnerController::saveAction',));
            }

            // arii_MFT_transfers
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfers$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_transfers')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransfersController::indexAction',));
            }

            // xml_MFT_transfers_grid
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfers/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_transfers_grid')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransfersController::gridAction',));
            }

            // xml_MFT_transfers_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfers/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_transfers_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransfersController::formAction',));
            }

            // xml_MFT_transfers_grid_menu
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfers/grid_menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_transfers_grid_menu')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransfersController::contextmenuAction',));
            }

            // xml_MFT_transfers_list
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfers/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_transfers_list')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransfersController::listAction',));
            }

            // xml_MFT_transfers_select
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfers/select\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_transfers_select')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransfersController::selectAction',));
            }

            // arii_MFT_transfer
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfer$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_transfer')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransferController::indexAction',));
            }

            // svg_MFT_transfer_graph
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfer/graph\\.svg$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'svg_MFT_transfer_graph')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\GraphvizController::transferAction',));
            }

            // svg_MFT_transfer_uml
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfer/uml\\.svg$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'svg_MFT_transfer_uml')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\GraphvizController::exchangeAction',));
            }

            // xml_MFT_transfer_toolbar
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfer/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_transfer_toolbar')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransferController::toolbarAction',));
            }

            // json_MFT_transfer_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfer/form\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_MFT_transfer_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransferController::structAction',));
            }

            // xml_MFT_transfer_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfer/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_transfer_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransferController::formAction',));
            }

            // html_MFT_transfer_delete
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfer/delete\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_MFT_transfer_delete')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransferController::deleteAction',));
            }

            // html_MFT_transfer_save
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/transfer/save\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_MFT_transfer_save')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\TransferController::saveAction',));
            }

            // arii_MFT_parameters
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/parameters$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_parameters')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\ParametersController::indexAction',));
            }

            // xml_MFT_parameters_grid
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/parameters/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_parameters_grid')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\ParametersController::gridAction',));
            }

            // xml_MFT_parameters_toolbar
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/parameters/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_parameters_toolbar')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\ParametersController::toolbarAction',));
            }

            // xml_MFT_parameters_grid_menu
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/parameters/grid_menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_parameters_grid_menu')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\ParametersController::contextmenuAction',));
            }

            // xml_MFT_parameter_toolbar
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/parameter/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_parameter_toolbar')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\ParameterController::toolbarAction',));
            }

            // json_MFT_parameter_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/parameter/form\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_MFT_parameter_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\ParameterController::structAction',));
            }

            // xml_MFT_parameter_form
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/parameter/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_parameter_form')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\ParameterController::optionsAction',));
            }

            // html_MFT_parameter_save
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/parameter/save\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_MFT_parameter_save')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\ParameterController::saveAction',));
            }

            // html_MFT_parameter_delete
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/parameter/delete\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_MFT_parameter_delete')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\ParameterController::deleteAction',));
            }

            // arii_MFT_receiver_yade
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/receiver/yade$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_receiver_yade')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\JadeController::historyAction',));
            }

            // xml_MFT_pie
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operations/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_pie')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationsController::pieAction',));
            }

            // xml_MFT_grid_toolbar
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operations/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_grid_toolbar')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationsController::toolbarAction',));
            }

            // arii_MFT_history
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_history')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationsController::indexAction',));
            }

            // arii_MFT_activities
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/activities$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_activities')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\OperationsController::activitiesAction',));
            }

            // arii_MFT_detail
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_detail')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DBController::detailAction',));
            }

            // xml_MFT_history
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_history')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DBController::historyAction',));
            }

            // xml_MFT_activities
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/activities\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_MFT_activities')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DBController::activitiesAction',));
            }

            // db_sosftp_history
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operations/db/sosftp_history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'db_sosftp_history')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\DBController::sosftp_historyAction',));
            }

            // db_graph_pie_send
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/operations/db/graph_pie_send$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'db_graph_pie_send')), array (  '_controller' => 'AriiMFTBundle:DBGraph:pie_send',));
            }

            // arii_MFT_db
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/db$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_db')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\EditController::indexAction',));
            }

            // arii_MFT_edit
            if (preg_match('#^/mft/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_MFT_edit')), array (  '_controller' => 'Arii\\MFTBundle\\Controller\\EditController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/gvz')) {
            // arii_GVZ_index
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arii_GVZ_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_GVZ_index')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_GVZ_readme
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_GVZ_readme')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DefaultController::readmeAction',));
            }

            // xml_GVZ_toolbar
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_GVZ_toolbar')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DefaultController::toolbarAction',));
            }

            // xml_GVZ_legend
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/legend\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_GVZ_legend')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DefaultController::legendAction',));
            }

            // json_GVZ_ribbon
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_GVZ_ribbon')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // txt_GVZ_file
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/file$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'txt_GVZ_file')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DefaultController::fileAction',));
            }

            // arii_GVZ_generate
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/generate$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_GVZ_generate')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\GraphvizController::generateAction',));
            }

            // arii_GVZ_generate_config
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/generate_config$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_GVZ_generate_config')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\GraphvizController::configAction',));
            }

            // arii_GVZ_dropzone
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dropzone$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_GVZ_dropzone')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DropzoneController::indexAction',));
            }

            // arii_GVZ_upload
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/upload$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_GVZ_upload')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\DropzoneController::uploadAction',));
            }

            // xml_GVZ_tree
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_GVZ_tree')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\FoldersController::treeAction',));
            }

            // xml_GVZ_tree_remote
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/remote/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_GVZ_tree_remote')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\FoldersController::treeAction',  'path' => 'remote',));
            }

            // arii_GVZ_audit
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_GVZ_audit')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\AuditController::indexAction',));
            }

            // arii_GVZ_audit_generate
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/generate$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_GVZ_audit_generate')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\AuditController::generateAction',));
            }

            // json_GVZ_audit_ribbon
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_GVZ_audit_ribbon')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\AuditController::ribbonAction',));
            }

            // xml_GVZ_audit_comments
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/comments\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_GVZ_audit_comments')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\AuditController::commentsAction',));
            }

            // xml_GVZ_audit_toolbar
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_GVZ_audit_toolbar')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\AuditController::toolbarAction',));
            }

            // xml_GVZ_audit_menu
            if (preg_match('#^/gvz/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/audit/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_GVZ_audit_menu')), array (  '_controller' => 'Arii\\GraphvizBundle\\Controller\\AuditController::menuAction',));
            }

        }

        if (0 === strpos($pathinfo, '/cache')) {
            // arii_Cache
            if (rtrim($pathinfo, '/') === '/cache') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arii_Cache');
                }

                return array (  '_controller' => 'Arii\\FocusBundle\\Controller\\CacheController::getAction',  '_route' => 'arii_Cache',);
            }

            // arii_Cache_purge
            if (0 === strpos($pathinfo, '/cache/purge') && preg_match('#^/cache/purge/(?P<spooler_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache_purge')), array (  '_controller' => 'Arii\\FocusBundle\\Controller\\CacheV3Controller::purgeAction',));
            }

            // arii_Cache2_get
            if (preg_match('#^/cache/(?P<spooler>[^/]++)/(?P<port>[^/]++)/get2$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache2_get')), array (  '_controller' => 'Arii\\FocusBundle\\Controller\\Cache2Controller::getAction',));
            }

            // arii_Cache_web
            if (preg_match('#^/cache/(?P<spooler>[^/]++)/(?P<port>[^/]++)/web$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache_web')), array (  '_controller' => 'Arii\\FocusBundle\\Controller\\CacheController::webAction',));
            }

            if (0 === strpos($pathinfo, '/cache/db')) {
                // arii_Cache_db_post
                if (preg_match('#^/cache/db/(?P<db>[^/]++)/post$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache_db_post')), array (  '_controller' => 'Arii\\FocusBundle\\Controller\\CacheDBController::postAction',));
                }

                // arii_Cache_db_tasks_history
                if ($pathinfo === '/cache/db/tasks/history') {
                    return array (  '_controller' => 'Arii\\FocusBundle\\Controller\\AggregController::historyAction',  '_route' => 'arii_Cache_db_tasks_history',);
                }

                // arii_Cache_db_orders_history
                if ($pathinfo === '/cache/db/orders/history') {
                    return array (  '_controller' => 'Arii\\FocusBundle\\Controller\\AggregController::orderHistoryAction',  '_route' => 'arii_Cache_db_orders_history',);
                }

            }

            if (0 === strpos($pathinfo, '/cache/post/jobs')) {
                // arii_Cache_jobs_status
                if ($pathinfo === '/cache/post/jobs/status') {
                    return array (  '_controller' => 'Arii\\FocusBundle\\Controller\\CacheDBController::statusAction',  '_route' => 'arii_Cache_jobs_status',);
                }

                // arii_Cache_jobs_runtime
                if ($pathinfo === '/cache/post/jobs/runtime') {
                    return array (  '_controller' => 'Arii\\FocusBundle\\Controller\\CacheDBController::runtimeAction',  '_route' => 'arii_Cache_jobs_runtime',);
                }

            }

            // arii_Cache_mft
            if ($pathinfo === '/cache/mft') {
                return array (  '_controller' => 'AriiMFTBundle:Background:post',  '_route' => 'arii_Cache_mft',);
            }

            if (0 === strpos($pathinfo, '/cache/db')) {
                // arii_Cache_sql_jobs
                if (preg_match('#^/cache/db/(?P<db>[^/]++)/jobs/runtimes$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache_sql_jobs')), array (  '_controller' => 'Arii\\FocusBundle\\Controller\\CacheSQLController::job_runtimesAction',));
                }

                // arii_Cache_sql_status
                if (preg_match('#^/cache/db/(?P<db>[^/]++)/jobs/status$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache_sql_status')), array (  '_controller' => 'Arii\\FocusBundle\\Controller\\CacheSQLController::job_statusAction',));
                }

                // arii_Cache_sql_orders
                if (preg_match('#^/cache/db/(?P<db>[^/]++)/orders/runtimes$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache_sql_orders')), array (  '_controller' => 'Arii\\FocusBundle\\Controller\\CacheSQLController::order_runtimesAction',));
                }

                // arii_Cache_sql_order_status
                if (preg_match('#^/cache/db/(?P<db>[^/]++)/orders/status$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache_sql_order_status')), array (  '_controller' => 'Arii\\FocusBundle\\Controller\\CacheSQLController::order_statusAction',));
                }

                // arii_Cache_sql_nodes
                if (preg_match('#^/cache/db/(?P<db>[^/]++)/nodes/runtimes$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache_sql_nodes')), array (  '_controller' => 'Arii\\FocusBundle\\Controller\\CacheSQLController::node_runtimesAction',));
                }

                // arii_Cache_sql_node_status
                if (preg_match('#^/cache/db/(?P<db>[^/]++)/nodes/status$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache_sql_node_status')), array (  '_controller' => 'Arii\\FocusBundle\\Controller\\CacheSQLController::node_statusAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/joc')) {
            // arii_JOC_command
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/XML/command$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_command')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SOSController::XMLCommandAction',));
            }

            // arii_JOC_sync
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/sync$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_sync')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SOSController::SyncAction',));
            }

            // arii_JOC_index
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arii_JOC_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_index')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::indexAction',));
            }

            // arii_JOC_readme
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_readme')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DefaultController::readmeAction',));
            }

            // json_JOC_ribbon
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JOC_ribbon')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // arii_JOC_jobs_dashboard
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/dashboard$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_jobs_dashboard')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::dashboardAction',));
            }

            // xml_JOC_browser
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/browser\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_browser')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::browserAction',));
            }

            // arii_JOC_orders_gantt
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/gantt$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_orders_gantt')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\GanttController::indexAction',));
            }

            // xml_JOC_toolbar_gantt
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/gantt/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_toolbar_gantt')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\GanttController::toolbarAction',));
            }

            // arii_JOC_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_toolbar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::defaultAction',));
            }

            // arii_JOC_toolbar_footer
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/footer$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_toolbar_footer')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::footerAction',));
            }

            // arii_JOC_toolbar_start_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_toolbar_start_job')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_start_jobAction',));
            }

            // arii_JOC_toolbar_start_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_jobs$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_toolbar_start_jobs')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_start_jobsAction',));
            }

            // arii_JOC_toolbar_stop_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/stop_job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_toolbar_stop_job')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_stop_jobAction',));
            }

            // arii_JOC_toolbar_stop_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/stop_jobs$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_toolbar_stop_jobs')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_stop_jobsAction',));
            }

            // arii_JOC_toolbar_unstop_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/unstop_job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_toolbar_unstop_job')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_unstop_jobAction',));
            }

            // arii_JOC_toolbar_unstop_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/unstop_jobs$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_toolbar_unstop_jobs')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_unstop_jobsAction',));
            }

            // arii_JOC_toolbar_add_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/add_order$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_toolbar_add_order')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_add_orderAction',));
            }

            // xml_JOC_toolbar_global
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/global$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_toolbar_global')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::globalAction',));
            }

            // png_JOC_percent
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/percent\\.png/(?P<percent>[^/]++)/(?P<color>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'png_JOC_percent')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\GraphController::percentAction',));
            }

            // arii_JOC_todo
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/todo$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_todo')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SidebarController::todoAction',));
            }

            // xml_JOC_orders_gantt
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/gantt\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_orders_gantt')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\GanttController::ordersAction',));
            }

            // arii_JOC_locks
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/locks$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_locks')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\LocksController::indexAction',));
            }

            // xml_JOC_locks
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/locks/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_locks')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\LocksController::gridAction',));
            }

            // xml_JOC_locks_use
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/locks/use\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_locks_use')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\LocksController::useAction',));
            }

            // arii_JOC_remote_schedulers
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/remote_schedulers$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_remote_schedulers')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\RemoteSchedulerController::indexAction',));
            }

            // xml_JOC_remote_schedulers_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/remote_schedulers/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_remote_schedulers_list')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\RemoteSchedulerController::list_xmlAction',));
            }

            // arii_JOC_connections
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connections$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_connections')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ConnectionsController::indexAction',));
            }

            // xml_JOC_connections
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/connections/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_connections')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ConnectionsController::gridAction',));
            }

            // arii_JOC_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_jobs')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::indexAction',));
            }

            // json_JOC_jobs_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JOC_jobs_form')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::formAction',));
            }

            // xml_JOC_jobs_form_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form_toolbar\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_jobs_form_toolbar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::form_toolbarAction',));
            }

            // xml_JOC_job_params_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/params_toolbar\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_job_params_toolbar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::params_toolbarAction',));
            }

            // xml_JOC_jobs_grid
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_jobs_grid')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::gridAction',));
            }

            // xml_JOC_jobs_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_jobs_toolbar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::toolbarAction',));
            }

            // xml_JOC_jobs_menu
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_jobs_menu')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::menuAction',));
            }

            // xml_JOC_start_job_parameters
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/start_job/parameters$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_start_job_parameters')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::start_job_parametersAction',));
            }

            // xml_JOC_job_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job_list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_job_list')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::job_listAction',));
            }

            // xml_JOC_jobs_pie
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_jobs_pie')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::pieAction',  'ordered' => 0,));
            }

            // xml_JOC_ordered_jobs_pie
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ordered_jobs/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_ordered_jobs_pie')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::pieAction',  'ordered' => 1,));
            }

            // json_JOC_jobs_execution_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/execution\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JOC_jobs_execution_form')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::executionAction',));
            }

            // json_JOC_jobs_spooler_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/spooler\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JOC_jobs_spooler_form')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::spoolerAction',));
            }

            // json_JOC_jobs_target_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/target\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JOC_jobs_target_form')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobsController::targetAction',));
            }

            // html_JOC_job_detail
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_JOC_job_detail')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::detailAction',));
            }

            // xml_JOC_job_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_job_form')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::formAction',));
            }

            // xml_JOC_job_params
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/params\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_job_params')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::paramsAction',));
            }

            // xml_JOC_job_execution_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/execution\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_job_execution_form')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::executionAction',));
            }

            // xml_JOC_job_spooler_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/spooler\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_job_spooler_form')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::spoolerAction',));
            }

            // xml_JOC_job_target_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/target\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_job_target_form')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::targetAction',));
            }

            // xml_JOC_job_log
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/log$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_job_log')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobController::logAction',));
            }

            // arii_JOC_jobchains
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobchains$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_jobchains')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobChainsController::listAction',));
            }

            // xml_JOC_jobchains_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobchains/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_jobchains_list')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\JobChainsController::list_xmlAction',));
            }

            // arii_JOC_orders
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_orders')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::indexAction',));
            }

            // xml_JOC_orders_grid
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_orders_grid')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::gridAction',));
            }

            // xml_JOC_orders_menu
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_orders_menu')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::menuAction',));
            }

            // xml_JOC_orders_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_orders_toolbar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::grid_toolbarAction',));
            }

            // xml_JOC_orders_form_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/form_toolbar\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_orders_form_toolbar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::form_toolbarAction',));
            }

            // arii_JOC_orders_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_orders_list')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::listAction',));
            }

            // xml_JOC_orders_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_orders_list')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::list_xmlAction',));
            }

            // arii_JOC_orders_charts
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/charts$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_orders_charts')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::chartsAction',));
            }

            // xml_JOC_add_order_parameters
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/add_order/parameters$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_add_order_parameters')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::add_order_parametersAction',));
            }

            // arii_JOC_orders_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/timeline$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_orders_timeline')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::timelineAction',));
            }

            // xml_JOC_orders_pie
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_orders_pie')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::pieAction',));
            }

            // xml_JOC_orders_bar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/bar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_orders_bar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::barAction',));
            }

            // xml_JOC_orders_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/timeline\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_orders_timeline')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::timeline_xmlAction',));
            }

            // arii_JOC_order_log
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/log$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_order_log')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::order_logAction',));
            }

            // arii_JOC_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_order')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrderController::indexAction',));
            }

            // arii_JOC_order_detail
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_order_detail')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrderController::detailAction',));
            }

            // xml_JOC_order_params
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/parameters\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_order_params')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrderController::paramsAction',));
            }

            // json_JOC_orders_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JOC_orders_form')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrdersController::formAction',));
            }

            // xml_JOC_order_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_order_form')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrderController::formAction',));
            }

            // svg_JOC_process_steps
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/graph\\.svg$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'svg_JOC_process_steps')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\OrderController::graphvizAction',));
            }

            // arii_JOC_chains
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_chains')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::listAction',));
            }

            // arii_JOC_chains_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_chains_list')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::listAction',));
            }

            // arii_JOC_chains_charts
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/charts$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_chains_charts')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::chartsAction',));
            }

            // xml_JOC_chains_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_chains_list')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::list_xmlAction',));
            }

            // arii_JOC_chains_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/timeline$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_chains_timeline')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::timelineAction',));
            }

            // xml_JOC_chains_pie
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_chains_pie')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::pieAction',));
            }

            // xml_JOC_chains_bar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/bar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_chains_bar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::barAction',));
            }

            // xml_JOC_chains_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/timeline\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_chains_timeline')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::timeline_xmlAction',));
            }

            // xml_JOC_chains_menu
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_chains_menu')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::menuAction',));
            }

            // xml_JOC_chains_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_chains_toolbar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ChainsController::toolbarAction',));
            }

            // arii_JOC_nested
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_nested')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::listAction',));
            }

            // arii_JOC_nested_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_nested_list')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::listAction',));
            }

            // xml_JOC_nested_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_nested_list')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::list_xmlAction',));
            }

            // arii_JOC_nested_charts
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/chains/charts$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_nested_charts')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::chartsAction',));
            }

            // arii_JOC_nested_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/timeline$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_nested_timeline')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::timelineAction',));
            }

            // xml_JOC_nested_pie
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_nested_pie')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::pieAction',));
            }

            // xml_JOC_nested_bar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/bar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_nested_bar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::barAction',));
            }

            // xml_JOC_nested_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/timeline\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_nested_timeline')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::timeline_xmlAction',));
            }

            // xml_JOC_nested_menu
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_nested_menu')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::menuAction',));
            }

            // xml_JOC_nested_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/nested/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_nested_toolbar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\NestedController::toolbarAction',));
            }

            // arii_JOC_spoolers
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_spoolers')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::indexAction',));
            }

            // xml_JOC_spoolers_menu
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_spoolers_menu')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::menuAction',));
            }

            // arii_JOC_spoolers_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_spoolers_list')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::listAction',));
            }

            // arii_JOC_spoolers_charts
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/charts$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_spoolers_charts')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::chartsAction',));
            }

            // xml_JOC_spoolers_grid
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_spoolers_grid')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::gridAction',));
            }

            // xml_JOC_spoolers_pie
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/pie\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_spoolers_pie')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::pieAction',));
            }

            // xml_JOC_spoolers_bar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/bar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_spoolers_bar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::barAction',));
            }

            // xml_JOC_spoolers_timeline
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/timeline\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_spoolers_timeline')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::timeline_xmlAction',));
            }

            // xml_JOC_spooler_log
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/log\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_spooler_log')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolerController::logAction',));
            }

            // arii_JOC_spooler_status
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/status$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_spooler_status')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolerController::statusAction',));
            }

            // xml_JOC_spooler_delete
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_spooler_delete')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolerController::deleteAction',));
            }

            // json_JOC_spoolers_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spoolers/form\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_JOC_spoolers_form')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolersController::formAction',));
            }

            // xml_JOC_spooler_form
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_spooler_form')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolerController::formAction',));
            }

            // xml_JOC_spooler_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_spooler_toolbar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolerController::toolbarAction',));
            }

            // xml_JOC_subscribers
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/spooler/subscribers\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_subscribers')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SpoolerController::subscribersAction',));
            }

            // arii_JOC_process_classes
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process_classes$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_process_classes')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ProcessClassesController::indexAction',));
            }

            // xml_JOC_process_classes
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process_classes/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_process_classes')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ProcessClassesController::gridAction',));
            }

            // arii_JOC_detail_planned
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_detail_planned')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::plannedAction',));
            }

            // arii_JOC_planned_log
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/planned/log$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_planned_log')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::planned_logAction',));
            }

            // arii_JOC_detail_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_detail_job')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::jobAction',));
            }

            // arii_JOC_job_log
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/log$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_job_log')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::job_logAction',));
            }

            // arii_JOC_start_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/start$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_start_job')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\CmdController::startjobAction',));
            }

            // arii_JOC_db_daysschedule
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/db/daysschedule$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_db_daysschedule')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBController::days_scheduleAction',));
            }

            // arii_JOC_db_reorg
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/db/reorg$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_db_reorg')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBController::reorgAction',));
            }

            // arii_JOC_ajax_job_info
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ajax/job_info$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_ajax_job_info')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\AjaxController::job_infoAction',));
            }

            // xml_JOC_toolbar_start_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_order\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_toolbar_start_order')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::start_orderAction',));
            }

            // xml_JOC_toolbar_order_params
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/start_order_params\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_toolbar_order_params')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::order_paramsAction',));
            }

            // arii_JOC_form_start_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/start_job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_form_start_job')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::start_jobAction',));
            }

            // arii_JOC_form_start_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/start_order$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_form_start_order')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::start_orderAction',));
            }

            // arii_JOC_form_add_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/add_order$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_form_add_order')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::add_orderAction',));
            }

            // arii_JOC_select_start_state
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/select_start_state$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_select_start_state')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::select_start_stateAction',));
            }

            // arii_JOC_select_end_state
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/select_end_state$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_select_end_state')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::select_end_stateAction',));
            }

            // arii_JOC_form_kill_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/kill_job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_form_kill_job')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::kill_jobAction',));
            }

            // arii_JOC_form_stop_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/stop_job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_form_stop_job')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::stop_jobAction',));
            }

            // arii_JOC_form_unstop_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/unstop_job$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_form_unstop_job')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FormController::unstop_jobAction',));
            }

            // arii_JOC_grid_history_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/grid_history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_grid_history_job')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::grid_historyAction',));
            }

            // arii_JOC_grid_history_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/grid_order_history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_grid_history_order')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::grid_order_historyAction',));
            }

            // arii_JOC_chart_history_job
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/chart_history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_chart_history_job')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::chart_historyAction',));
            }

            // arii_JOC_chart_history_order
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/dhtmlx/chart_order_history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_chart_history_order')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DetailController::chart_order_historyAction',));
            }

            // arii_JOC_timeline_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_timeline_history')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::timeline_historyAction',));
            }

            // arii_JOC_radar_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/radar_chart/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_radar_history')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::radar_historyAction',));
            }

            // arii_JOC_bar3_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/bar3_chart/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_bar3_history')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::bar3_historyAction',));
            }

            // arii_JOC_last_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/last_chart/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_last_history')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::last_historyAction',));
            }

            // arii_JOC_bar_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/bar_chart/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_bar_history')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::bar_historyAction',));
            }

            // arii_JOC_pie_orders
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/pie_chart/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_pie_orders')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::pie_ordersAction',));
            }

            // arii_JOC_radar_orders
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/radar_chart/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_radar_orders')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::radar_ordersAction',));
            }

            // arii_JOC_pie_planned
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/pie_chart/planned$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_pie_planned')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::pie_plannedAction',));
            }

            // arii_JOC_radar_planned
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/radar_chart/planned$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_radar_planned')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::radar_plannedAction',));
            }

            // arii_JOC_pie_messages
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/pie_chart/messages$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_pie_messages')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\DBGraphController::pie_messagesAction',));
            }

            // arii_JOC_menu_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_menu_history')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\MenuController::historyAction',));
            }

            // arii_JOC_menu_orders
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_menu_orders')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\MenuController::ordersAction',));
            }

            // arii_JOC_menu_planned
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/planned$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_menu_planned')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\MenuController::plannedAction',));
            }

            // arii_JOC_menu_messages
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_menu_messages')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\MenuController::messagesAction',));
            }

            // arii_JOC_toolbar_job_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/job_list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_toolbar_job_list')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_job_listAction',));
            }

            // arii_JOC_toolbar_refresh
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/refresh$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_toolbar_refresh')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_refreshAction',));
            }

            // arii_JOC_toolbar_schedule_list
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar/schedule_list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_toolbar_schedule_list')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ToolbarController::toolbar_schedule_listAction',));
            }

            // arii_JOC_simile_xml_all
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/xml/all$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_simile_xml_all')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SimileController::history_xmlAction',  'part' => '',));
            }

            // arii_JOC_simile_xml_history
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/xml/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_simile_xml_history')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SimileController::history_xmlAction',  'part' => 'history',));
            }

            // arii_JOC_simile_xml_orders
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/xml/orders$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_simile_xml_orders')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SimileController::history_xmlAction',  'part' => 'orders',));
            }

            // arii_JOC_simile_xml_planned
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/xml/planned$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_simile_xml_planned')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SimileController::history_xmlAction',  'part' => 'planned',));
            }

            // arii_JOC_simile_xml_events
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/timeline/xml/events$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_simile_xml_events')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SimileController::history_xmlAction',  'part' => 'events',));
            }

            // xml_JOC_reports_toolbar
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/reports/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_reports_toolbar')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ReportsController::toolbarAction',));
            }

            // arii_JOC_report_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/reports/jobs$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_report_jobs')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ReportsController::jobsAction',));
            }

            // xml_JOC_report_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/reports/jobs\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_report_jobs')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\ReportsController::report_jobsAction',));
            }

            // arii_JOC_runtimes
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/runtimes$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_runtimes')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\RuntimesController::listAction',));
            }

            // xml_JOC_runtimes_orders
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/runtimes/orders\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_runtimes_orders')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\RuntimesController::ordersAction',));
            }

            // xml_JOC_runtimes_steps
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/runtimes/steps$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_runtimes_steps')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\RuntimesController::stepsAction',));
            }

            // xml_JOC_runtimes_jobs
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/runtimes/jobs$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_runtimes_jobs')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\RuntimesController::jobsAction',));
            }

            // arii_JOC_schedules
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/schedules$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JOC_schedules')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SchedulesController::indexAction',));
            }

            // xml_JOC_schedules
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/schedules/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_JOC_schedules')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\SchedulesController::gridAction',));
            }

            // arii_Focus_get
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/(?P<spooler>[^/]++)/(?P<port>[^/]++)/get$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Focus_get')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FocusController::getAction',));
            }

            // arii_Focus_refresh
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/refresh$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Focus_refresh')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FocusController::refreshAction',));
            }

            // arii_Cache_post
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/post$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache_post')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FocusController::postAction',));
            }

            // arii_Cache_file
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/file$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache_file')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FocusController::fileAction',));
            }

            // arii_Cache_get
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/(?P<spooler>[^/]++)/(?P<port>[^/]++)/get$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache_get')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FocusController::getAction',));
            }

            // arii_Cache_test
            if (preg_match('#^/joc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/(?P<spooler>[^/]++)/(?P<port>[^/]++)/test$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Cache_test')), array (  '_controller' => 'Arii\\JOCBundle\\Controller\\FocusController::testAction',));
            }

        }

        if (0 === strpos($pathinfo, '/tc')) {
            // arii_Time_index
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arii_Time_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Time_index')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_Time_readme
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Time_readme')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\DefaultController::readmeAction',));
            }

            // xml_Time_toolbar
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_toolbar')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\DefaultController::toolbarAction',));
            }

            // json_Time_ribbon
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_Time_ribbon')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // xml_Time_menu
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_menu')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\DefaultController::menuAction',));
            }

            // xml_Time_context_menu
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/context_menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_context_menu')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\DefaultController::menuAction',));
            }

            // arii_Time_zones
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/zones$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Time_zones')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\ZonesController::indexAction',));
            }

            // xml_Time_zones
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/zones/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_zones')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\ZonesController::gridAction',));
            }

            // xml_Time_zones_tree
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/zones/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_zones_tree')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\ZonesController::treeAction',));
            }

            // xml_Time_zones_form
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/zones/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_zones_form')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\ZonesController::formAction',));
            }

            // arii_Time_references
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/references$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Time_references')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\ReferencesController::indexAction',));
            }

            // xml_Time_references
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/references/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_references')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\ReferencesController::gridAction',));
            }

            // xml_Time_references_tree
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/references/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_references_tree')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\ReferencesController::treeAction',));
            }

            // xml_Time_references_list
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/references/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_references_list')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\ReferencesController::listAction',));
            }

            // xml_Time_references_form
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/references/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_references_form')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\ReferencesController::formAction',));
            }

            // xml_Time_references_rules
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/references/rules\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_references_rules')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\ReferencesController::rulesAction',));
            }

            // xml_Time_references_add_rule
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/references/add_rule\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_references_add_rule')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\ReferencesController::add_ruleAction',));
            }

            // xml_Time_references_del_rule
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/references/del_rule\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_references_del_rule')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\ReferencesController::del_ruleAction',));
            }

            // arii_Time_calendars
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/calendars$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Time_calendars')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\CalendarsController::indexAction',));
            }

            // xml_Time_calendars_toolbar
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/calendars/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_calendars_toolbar')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\CalendarsController::toolbarAction',));
            }

            // xml_Time_calendars
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/calendars/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_calendars')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\CalendarsController::gridAction',));
            }

            // xml_Time_calendars_form
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/calendars/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_calendars_form')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\CalendarsController::formAction',));
            }

            // xml_Time_calendar_test
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/calendars/test\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_calendar_test')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\CalendarsController::testAction',));
            }

            // xml_Time_calendar_test_schedule
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/calendars/schedule\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_calendar_test_schedule')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\CalendarsController::scheduleAction',));
            }

            // arii_Time_rules
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/rules$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Time_rules')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\RulesController::indexAction',));
            }

            // xml_Time_rules_toolbar
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/rules/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_rules_toolbar')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\RulesController::toolbarAction',));
            }

            // xml_Time_rules
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/rules/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_rules')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\RulesController::gridAction',));
            }

            // xml_Time_rules_form
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/rules/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_rules_form')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\RulesController::formAction',));
            }

            // xml_Time_rule_test
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/rules/test\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_rule_test')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\RulesController::testAction',));
            }

            // xml_Time_rule_save
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/rules/save\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_rule_save')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\RulesController::saveAction',));
            }

            // xml_Time_rule_test_schedule
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/rules/schedule\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_rule_test_schedule')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\RulesController::scheduleAction',));
            }

            // arii_Time_days
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/days$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Time_days')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\DaysController::indexAction',));
            }

            // xml_Time_days
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/days/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_days')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\DaysController::gridAction',));
            }

            // arii_Time_holidays
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/holidays$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Time_holidays')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\HolidaysController::indexAction',));
            }

            // xml_Time_holidays
            if (preg_match('#^/tc/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/holidays/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Time_holidays')), array (  '_controller' => 'Arii\\TimeBundle\\Controller\\HolidaysController::listAction',));
            }

        }

        if (0 === strpos($pathinfo, '/report')) {
            // arii_Report_index
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arii_Report_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_index')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::indexAction',));
            }

            // arii_Report_readme
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_readme')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::readmeAction',));
            }

            // xml_Report_tree
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Report_tree')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::treeAction',));
            }

            // xml_Report_form
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/form\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Report_form')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::infoAction',));
            }

            // xml_Report_view
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/view\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Report_view')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::docAction',));
            }

            // json_Report_ribbon
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_Report_ribbon')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::ribbonAction',));
            }

            // arii_Report_documents
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/documents$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_documents')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentsController::indexAction',));
            }

            // xml_Report_documents_toolbar
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/documents/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Report_documents_toolbar')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentsController::toolbarAction',));
            }

            // arii_Report_document
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/document$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_document')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentController::docAction',));
            }

            // arii_Report_document_get
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/document/get$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_document_get')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentController::getAction',));
            }

            // xml_Report_document_toolbar
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/document/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Report_document_toolbar')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentController::toolbarAction',));
            }

            // arii_Report_status
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/status$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_status')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::statusAction',));
            }

            // arii_Report_history
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/history$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_history')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DefaultController::historyAction',));
            }

            // xml_Report_grid
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Report_grid')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\OrdersController::gridAction',));
            }

            // xml_Report_docs
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/documents/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Report_docs')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentsController::gridAction',));
            }

            // arii_Report_requests
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_requests')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\RequestsController::indexAction',));
            }

            // xml_Report_requests_list
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/list\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Report_requests_list')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\RequestsController::listAction',));
            }

            // xml_Report_requests_toolbar
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Report_requests_toolbar')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\RequestsController::toolbarAction',));
            }

            // arii_Report_requests_result
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/result\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_requests_result')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\RequestsController::resultAction',));
            }

            // arii_Report_requests_summary
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/requests/summary\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_requests_summary')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\RequestsController::summaryAction',));
            }

            // arii_Report_import
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/import$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_import')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\ImportController::indexAction',));
            }

            // html_Report_import
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/import\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_Report_import')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\ImportController::getAction',));
            }

            // arii_Report_jasper
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jasper$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_jasper')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\DocumentsController::indexAction',));
            }

            // arii_Report_process
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_process')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\ProcessController::indexAction',));
            }

            // xml_Report_process_tree
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Report_process_tree')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\ProcessController::treeAction',));
            }

            // xml_Report_process_orders
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/process/orders\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Report_process_orders')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\ProcessController::ordersAction',));
            }

            // arii_Report_edit
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_edit')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\EditController::indexAction',));
            }

            // xml_Report_edit_tree
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/edit/tree\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Report_edit_tree')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\EditController::treeAction',));
            }

            // html_Report_edit_sql
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/edit/sql\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_Report_edit_sql')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\EditController::sqlAction',));
            }

            // arii_Report_ipam
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ipam$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_Report_ipam')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\IPAMController::indexAction',));
            }

            // html_Report_ipam_get
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ipam/get\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_Report_ipam_get')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\IPAMController::getAction',));
            }

            // xml_Report_ipam_grid
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ipam/grid\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_Report_ipam_grid')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\IPAMController::gridAction',));
            }

            // html_Report_ipam_pop
            if (preg_match('#^/report/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ipam/pop\\.html$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'html_Report_ipam_pop')), array (  '_controller' => 'Arii\\ReportBundle\\Controller\\IPAMController::popAction',));
            }

        }

        if (0 === strpos($pathinfo, '/housekeeping')) {
            if (0 === strpos($pathinfo, '/housekeeping/purge')) {
                // arii_JID_purge
                if ($pathinfo === '/housekeeping/purge') {
                    return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purgeAction',  '_route' => 'arii_JID_purge',);
                }

                if (0 === strpos($pathinfo, '/housekeeping/purge_')) {
                    // arii_JID_purge_history
                    if ($pathinfo === '/housekeeping/purge_history') {
                        return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purge_historyAction',  '_route' => 'arii_JID_purge_history',);
                    }

                    // arii_JID_purge_order_history
                    if ($pathinfo === '/housekeeping/purge_order') {
                        return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purge_orderAction',  '_route' => 'arii_JID_purge_order_history',);
                    }

                }

                // arii_JID_purge_history_out
                if (0 === strpos($pathinfo, '/housekeeping/purge/history') && preg_match('#^/housekeeping/purge/history/(?P<DB>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_purge_history_out')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purgeHistoryAction',));
                }

                // arii_JID_purge_orders_history_out
                if (0 === strpos($pathinfo, '/housekeeping/purge/orders') && preg_match('#^/housekeeping/purge/orders/(?P<DB>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_JID_purge_orders_history_out')), array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purgeOrdersHistoryAction',));
                }

            }

            // arii_JID_status_history
            if ($pathinfo === '/housekeeping/status') {
                return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::statusAction',  '_route' => 'arii_JID_status_history',);
            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/public/purge')) {
                // arii_JID_purge_history_public
                if ($pathinfo === '/public/purge/history') {
                    return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purge_historyAction',  '_route' => 'arii_JID_purge_history_public',);
                }

                // arii_JID_purge_order_public
                if ($pathinfo === '/public/purge/orders') {
                    return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purge_orderAction',  '_route' => 'arii_JID_purge_order_public',);
                }

                // arii_JID_purge_order_step_public
                if ($pathinfo === '/public/purge/steps') {
                    return array (  '_controller' => 'Arii\\JIDBundle\\Controller\\DBController::purge_order_stepsAction',  '_route' => 'arii_JID_purge_order_step_public',);
                }

            }

            if (0 === strpos($pathinfo, '/plan')) {
                // arii_DS_Command
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/XML/command$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_DS_Command')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\SOSController::XMLCommandAction',));
                }

                // arii_DS_index
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'arii_DS_index');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_DS_index')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::indexAction',));
                }

                // arii_DS_readme
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/readme$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_DS_readme')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\DefaultController::readmeAction',));
                }

                // xml_DS_toolbar
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_toolbar')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\DefaultController::toolbarAction',));
                }

                // json_DS_ribbon
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/ribbon\\.json$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_DS_ribbon')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\DefaultController::ribbonAction',));
                }

                // xml_DS_menu
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_menu')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\DefaultController::menuAction',));
                }

                // arii_DS_jobs
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_DS_jobs')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::indexAction',));
                }

                // xml_DS_jobs_grid
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/grid\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_jobs_grid')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::gridAction',));
                }

                // xml_DS_jobs_pie
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/pie\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_jobs_pie')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::pieAction',));
                }

                // xml_DS_jobs_toolbar
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/toolbar\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_jobs_toolbar')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::toolbarAction',));
                }

                // xml_DS_jobs_timeline
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/timeline\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_jobs_timeline')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::timelineAction',));
                }

                // json_DS_jobs_form
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form\\.json$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_DS_jobs_form')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::formAction',));
                }

                // xml_DS_jobs_form
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/job/form\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_jobs_form')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobController::formAction',));
                }

                // xml_DS_jobs_form_toolbar
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/jobs/form_toolbar\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_jobs_form_toolbar')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\JobsController::form_toolbarAction',));
                }

                // arii_DS_orders
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'arii_DS_orders')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::indexAction',));
                }

                // xml_DS_orders_grid
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/grid\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_orders_grid')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::gridAction',));
                }

                // xml_DS_orders_pie
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/pie\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_orders_pie')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::pieAction',));
                }

                // xml_DS_orders_toolbar
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/toolbar\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_orders_toolbar')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::toolbarAction',));
                }

                // json_DS_orders_form
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/form\\.json$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_DS_orders_form')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::formAction',));
                }

                // xml_DS_order_form
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/order/form\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_order_form')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrderController::formAction',));
                }

                // xml_DS_orders_form_toolbar
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/form_toolbar\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_orders_form_toolbar')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::form_toolbarAction',));
                }

                // xml_DS_orders_timeline
                if (preg_match('#^/plan/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/orders/timeline\\.xml$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_DS_orders_timeline')), array (  '_controller' => 'Arii\\DSBundle\\Controller\\OrdersController::timelineAction',));
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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
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
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/user')) {
            // json_User_login_form
            if (preg_match('#^/user/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/login\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_User_login_form')), array (  '_controller' => 'Arii\\UserBundle\\Controller\\AriiController::loginAction',));
            }

            // xml_User_menu
            if (preg_match('#^/user/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/menu\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_User_menu')), array (  '_controller' => 'Arii\\UserBundle\\Controller\\AriiController::menuAction',));
            }

            // xml_User_toolbar
            if (preg_match('#^/user/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/toolbar\\.xml$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'xml_User_toolbar')), array (  '_controller' => 'Arii\\UserBundle\\Controller\\AriiController::toolbarAction',));
            }

            // json_User_ribbon
            if (preg_match('#^/user/(?P<_locale>en|fr|es|de|cn|ar|ru|jp)/login/ribbon\\.json$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_User_ribbon')), array (  '_controller' => 'Arii\\UserBundle\\Controller\\AriiController::ribbonAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
