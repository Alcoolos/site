<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/admin' => array(array('_route' => 'admin_hub', '_controller' => 'App\\Controller\\AdminController::hub'), null, null, null),
                    '/admin/list/users' => array(array('_route' => 'user_list_admin', '_controller' => 'App\\Controller\\AdminController::list_users'), null, null, null),
                    '/admin/new' => array(array('_route' => 'new', '_controller' => 'App\\Controller\\AdminController::addAlcool'), null, null, null),
                    '/login' => array(array('_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'), null, null, null),
                    '/logout' => array(array('_route' => 'logout', '_controller' => 'App\\Controller\\LoginController::disconnect'), null, null, null),
                    '/profile' => array(array('_route' => 'profile', '_controller' => 'App\\Controller\\LoginController::showProfile'), null, null, null),
                    '/notes' => array(array('_route' => 'notes', '_controller' => 'App\\Controller\\NotesController::index'), null, null, null),
                    '/signup' => array(array('_route' => 'signup', '_controller' => 'App\\Controller\\SingupController::signup'), null, null, null),
                    '/home' => array(array('_route' => 'home', '_controller' => 'App\\Controller\\WelcomeController::getfirst10'), null, null, null),
                    '/' => array(array('_route' => 'app_welcome_displayhome', '_controller' => 'App\\Controller\\WelcomeController::displayHome'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/a(?'
                        .'|dmin/(?'
                            .'|list/alcool(?:/(\\d+))?(*:42)'
                            .'|modify/(?'
                                .'|([^/]++)(*:67)'
                                .'|user/([^/]++)(*:87)'
                            .')'
                            .'|delete/(?'
                                .'|([^/]++)(*:113)'
                                .'|user/([^/]++)(*:134)'
                            .')'
                        .')'
                        .'|lcool(?'
                            .'|(?:/(\\d+))?(*:163)'
                            .'|/(?'
                                .'|([^/]++)(*:183)'
                                .'|vote/([^/]++)/(\\d+)(*:210)'
                            .')'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:252)'
                        .'|wdt/([^/]++)(*:272)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:318)'
                                .'|router(*:332)'
                                .'|exception(?'
                                    .'|(*:352)'
                                    .'|\\.css(*:365)'
                                .')'
                            .')'
                            .'|(*:375)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            42 => array(array('_route' => 'alcool_list_admin', 'page' => 1, '_controller' => 'App\\Controller\\AdminController::list_ingr'), array('page'), null, null),
                            67 => array(array('_route' => 'modify', '_controller' => 'App\\Controller\\AdminController::modifyAlcool'), array('name'), null, null),
                            87 => array(array('_route' => 'modify_user', '_controller' => 'App\\Controller\\AdminController::modifyUser'), array('id'), null, null),
                            113 => array(array('_route' => 'delete', '_controller' => 'App\\Controller\\AdminController::deleteAlcool'), array('name'), null, null),
                            134 => array(array('_route' => 'delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'), array('id'), null, null),
                            163 => array(array('_route' => 'alcool_list', 'page' => 1, '_controller' => 'App\\Controller\\ProduitController::list_ingr'), array('page'), null, null),
                            183 => array(array('_route' => 'alcool_show', '_controller' => 'App\\Controller\\ProduitController::showAction'), array('name'), null, null),
                            210 => array(array('_route' => 'alcool_vote', '_controller' => 'App\\Controller\\ProduitController::voteAction'), array('name', 'note'), null, null),
                            252 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            272 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            318 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            332 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            352 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            365 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            375 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (375 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
