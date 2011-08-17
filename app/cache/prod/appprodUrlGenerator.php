<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'post' => true,
       'post_show' => true,
       'post_new' => true,
       'post_create' => true,
       'post_edit' => true,
       'post_update' => true,
       'post_delete' => true,
       'acme_blog_default_index' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getpostRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/post/',  ),));
    }

    private function getpost_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/post',  ),));
    }

    private function getpost_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/post/new',  ),));
    }

    private function getpost_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/post/create',  ),));
    }

    private function getpost_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/post',  ),));
    }

    private function getpost_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/post',  ),));
    }

    private function getpost_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PostController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/post',  ),));
    }

    private function getacme_blog_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }
}
