<?php
require_once dirname(__FILE__) . "/../" . "bootstrap.php";

use \Symfony\Component\Routing\Matcher\UrlMatcher;
use \Symfony\Component\Routing\RequestContext;
use \Symfony\Component\Routing\RouteCollection;
use \Symfony\Component\Routing\Route;
use \Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\Response;

// init Request
$request = new Request($_GET, $_POST, array(), $_COOKIE, $_FILES, $_SERVER);

// create route
$route = new Route(
    $path = '/foo',
    $defaults = array('controller' => 'MyController', "xxx" => 'fff'),
    $requirements = array(),
    $options = array(),
    $host = '',
    $schemes = array(),
    $methods = array(),
    $condition = ''
);

$routes = new RouteCollection();
$routes->add('route_name', $route);
$routes->addPrefix("/");

// you can use cache
$routes = unserialize(serialize($routes));

// using route
$context = new RequestContext(
    $baseUrl = '/',
    $method = $request->getMethod(),
    $host = $request->getHttpHost(),
    $scheme = $request->getScheme(),
    $httpPort = $request->getPort(),
    $httpsPort = $request->getPort(),
    $path = '/',
    $queryString = $request->getQueryString()
);
$matcher = new UrlMatcher($routes, $context);
$parameters = $matcher->match($request->getPathInfo());

// send response
$response = new Response();
$response->setContent(date("Y-m-d H:i:s"));
$response->setStatusCode(404);
$response->headers->add([
    "Content-Type" => "image/jpeg"
]);
$response->send();
