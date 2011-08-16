<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // post
        if (rtrim($pathinfo, '/') === '/post') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'post');
            }
            return array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::indexAction',  '_route' => 'post',);
        }

        // post_show
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::showAction',)), array('_route' => 'post_show'));
        }

        // post_new
        if ($pathinfo === '/post/new') {
            return array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::newAction',  '_route' => 'post_new',);
        }

        // post_create
        if ($pathinfo === '/post/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_post_create;
            }
            return array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::createAction',  '_route' => 'post_create',);
        }
        not_post_create:

        // post_edit
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::editAction',)), array('_route' => 'post_edit'));
        }

        // post_update
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_post_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::updateAction',)), array('_route' => 'post_update'));
        }
        not_post_update:

        // post_delete
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_post_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::deleteAction',)), array('_route' => 'post_delete'));
        }
        not_post_delete:

        // acme_blog_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\BlogBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'acme_blog_default_index'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
