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

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/blog')) {
            // blog_index
            if ('/blog' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\BlogController::index',  '_route' => 'blog_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'blog_index'));
                }

                return $ret;
            }

            // blog_add
            if ('/blog/add' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\BlogController::add',  '_route' => 'blog_add',);
            }

            // blog_show
            if (0 === strpos($pathinfo, '/blog/show') && preg_match('#^/blog/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_show')), array (  '_controller' => 'App\\Controller\\BlogController::show',));
            }

        }

        // following_follow
        if (0 === strpos($pathinfo, '/following/follow') && preg_match('#^/following/follow/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'following_follow')), array (  '_controller' => 'App\\Controller\\FollowingController::follow',));
        }

        // following_unfollow
        if (0 === strpos($pathinfo, '/following/unfollow') && preg_match('#^/following/unfollow/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'following_unfollow')), array (  '_controller' => 'App\\Controller\\FollowingController::unfollow',));
        }

        if (0 === strpos($pathinfo, '/l')) {
            // likes_like
            if (0 === strpos($pathinfo, '/likes/like') && preg_match('#^/likes/like/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'likes_like')), array (  '_controller' => 'App\\Controller\\LikesController::like',));
            }

            // likes_unlike
            if (0 === strpos($pathinfo, '/likes/unlike') && preg_match('#^/likes/unlike/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'likes_unlike')), array (  '_controller' => 'App\\Controller\\LikesController::unlike',));
            }

            // security_login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'security_login',);
            }

            // security_logout
            if ('/logout' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\SecurityController::logout',  '_route' => 'security_logout',);
            }

        }

        elseif (0 === strpos($pathinfo, '/micro-post')) {
            // micro_post_index
            if ('/micro-post' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\MicroPostController::index',  '_route' => 'micro_post_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'micro_post_index'));
                }

                return $ret;
            }

            // micro_post_edit
            if (0 === strpos($pathinfo, '/micro-post/edit') && preg_match('#^/micro\\-post/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'micro_post_edit')), array (  '_controller' => 'App\\Controller\\MicroPostController::edit',));
            }

            // micro_post_delete
            if (0 === strpos($pathinfo, '/micro-post/delete') && preg_match('#^/micro\\-post/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'micro_post_delete')), array (  '_controller' => 'App\\Controller\\MicroPostController::delete',));
            }

            // micro_post_add
            if ('/micro-post/add' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\MicroPostController::add',  '_route' => 'micro_post_add',);
            }

            // micro_post_user
            if (0 === strpos($pathinfo, '/micro-post/user') && preg_match('#^/micro\\-post/user/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'micro_post_user')), array (  '_controller' => 'App\\Controller\\MicroPostController::userPosts',));
            }

            // micro_post_post
            if (preg_match('#^/micro\\-post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'micro_post_post')), array (  '_controller' => 'App\\Controller\\MicroPostController::post',));
            }

        }

        elseif (0 === strpos($pathinfo, '/notification')) {
            // notification_unread
            if ('/notification/unread-count' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\NotificationController::unreadCount',  '_route' => 'notification_unread',);
            }

            // notification_all
            if ('/notification/all' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\NotificationController::notifications',  '_route' => 'notification_all',);
            }

            if (0 === strpos($pathinfo, '/notification/acknowledge')) {
                // notification_acknowledge
                if (preg_match('#^/notification/acknowledge/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_acknowledge')), array (  '_controller' => 'App\\Controller\\NotificationController::acknowledge',));
                }

                // notification_acknowledge_all
                if ('/notification/acknowledge-all' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\NotificationController::acknowledgeAll',  '_route' => 'notification_acknowledge_all',);
                }

            }

        }

        // user_register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\RegisterController::register',  '_route' => 'user_register',);
        }

        // security_confirm
        if (0 === strpos($pathinfo, '/confirm') && preg_match('#^/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_confirm')), array (  '_controller' => 'App\\Controller\\SecurityController::confirm',));
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
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

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
