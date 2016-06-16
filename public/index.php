<?php
require_once dirname(__FILE__) . "/../" . "bootstrap.php";

use \Symfony\Component\Routing\Matcher\UrlMatcher;
use \Symfony\Component\Routing\RequestContext;
use \Symfony\Component\Routing\RouteCollection;
use \Symfony\Component\Routing\Route;

use \Symfony\Component\HttpFoundation\Request;
use \Impress\Framework\Http\Response;

use \Impress\Framework\Http\View;

// init Request --------------------------------------------------------------------
$request = new Request($_GET, $_POST, array(), $_COOKIE, $_FILES, $_SERVER);

// create route --------------------------------------------------------------------
$route = new Route(
    $path = '/foo',
    $defaults = array('controller' => 'HelloWorld', "function" => 'index'),
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


// send response --------------------------------------------------------------------

// use view
$content = View::make("helloworld.twig", [
    "firstname" => "world.!!!"
]);

// use Controller
$calss_name = "\\App\\Http\\Controllers\\" . $parameters['controller'];
$class = new $calss_name();
$content = call_user_func_array(array($class, $parameters['function']), array());

if ($content instanceof Response) {
    $content->send();
} else {
    $response = new Response();
    $response->setContent($content);
    $response->setStatusCode(200);
    $response->send();
}
