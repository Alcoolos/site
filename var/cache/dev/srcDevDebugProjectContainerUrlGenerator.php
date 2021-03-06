<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin_hub' => array(array(), array('_controller' => 'App\\Controller\\AdminController::hub'), array(), array(array('text', '/admin')), array(), array()),
        'alcool_list_admin' => array(array('page'), array('page' => 1, '_controller' => 'App\\Controller\\AdminController::list_ingr'), array('page' => '\\d+'), array(array('variable', '/', '\\d+', 'page'), array('text', '/admin/list/alcool')), array(), array()),
        'user_list_admin' => array(array(), array('_controller' => 'App\\Controller\\AdminController::list_users'), array('page' => '\\d+'), array(array('text', '/admin/list/users')), array(), array()),
        'new' => array(array(), array('_controller' => 'App\\Controller\\AdminController::addAlcool'), array(), array(array('text', '/admin/new')), array(), array()),
        'modify' => array(array('name'), array('_controller' => 'App\\Controller\\AdminController::modifyAlcool'), array(), array(array('variable', '/', '[^/]++', 'name'), array('text', '/admin/modify')), array(), array()),
        'delete' => array(array('name'), array('_controller' => 'App\\Controller\\AdminController::deleteAlcool'), array(), array(array('variable', '/', '[^/]++', 'name'), array('text', '/admin/delete')), array(), array()),
        'delete_user' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::deleteUser'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/delete/user')), array(), array()),
        'modify_user' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::modifyUser'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/modify/user')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\LoginController::login'), array(), array(array('text', '/login')), array(), array()),
        'logout' => array(array(), array('_controller' => 'App\\Controller\\LoginController::disconnect'), array(), array(array('text', '/logout')), array(), array()),
        'profile' => array(array(), array('_controller' => 'App\\Controller\\LoginController::showProfile'), array(), array(array('text', '/profile')), array(), array()),
        'notes' => array(array(), array('_controller' => 'App\\Controller\\NotesController::index'), array(), array(array('text', '/notes')), array(), array()),
        'alcool_list' => array(array('page'), array('page' => 1, '_controller' => 'App\\Controller\\ProduitController::list_ingr'), array('page' => '\\d+'), array(array('variable', '/', '\\d+', 'page'), array('text', '/alcool')), array(), array()),
        'alcool_show' => array(array('name'), array('_controller' => 'App\\Controller\\ProduitController::showAction'), array(), array(array('variable', '/', '[^/]++', 'name'), array('text', '/alcool')), array(), array()),
        'alcool_vote' => array(array('name', 'note'), array('_controller' => 'App\\Controller\\ProduitController::voteAction'), array('note' => '\\d+'), array(array('variable', '/', '\\d+', 'note'), array('variable', '/', '[^/]++', 'name'), array('text', '/alcool/vote')), array(), array()),
        'signup' => array(array(), array('_controller' => 'App\\Controller\\SingupController::signup'), array(), array(array('text', '/signup')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\WelcomeController::getfirst10'), array(), array(array('text', '/home')), array(), array()),
        'app_welcome_displayhome' => array(array(), array('_controller' => 'App\\Controller\\WelcomeController::displayHome'), array(), array(array('text', '/')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
