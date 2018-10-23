<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
