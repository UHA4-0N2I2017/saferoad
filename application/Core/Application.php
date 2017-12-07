<?php
/** For more info about namespaces plase @see http://php.net/manual/en/language.namespaces.importing.php */
namespace Mini\Core;


use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

class Application
{

    /**
     * "Start" the application:
     * Analyze the URL elements and calls the according controller/method or the fallback
     * @param $routes
     */
    public function __construct($routes)
    {
        $url = isset($_GET['url']) ? '/' . $_GET['url'] : '/';

        $collector = new RouteCollector();

        foreach ($routes['GET'] as $route => $controller_method) {
            $controller = ucfirst(explode("#", $controller_method)[0]) . "Controller";
            $method = explode("#", $controller_method)[1];
            $collector->get($route, ["Mini\\Controller\\" . $controller, $method]);
        }

        foreach ($routes['POST'] as $route => $controller_method) {
            $controller = ucfirst(explode("#", $controller_method)[0]) . "Controller";
            $method = explode("#", $controller_method)[1];
            $collector->post($route, ["Mini\\Controller\\" . $controller, $method]);
        }

        $dispatcher = new Dispatcher($collector->getData());

        try {
            $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
        } catch (HttpRouteNotFoundException $ex) {
            $dispatcher->dispatch('GET', '/error');
        }


    }


}
