<?php
namespace Htwu\Play\BindTo;

class App
{
    protected $routes = array();
    protected $responseStatus = 'text/html';
    protected $responseContentType = 'text/html';
    protected $responseBody = 'Hello world';

    public function addRoute($routePath, $routeCallback)
    {
        $this->routes[$routePath] = $routeCallback->bindTo($this, __CLASS__);
    }

    public function dispatch($currentPath)
    {
        foreach ($this->routes as $routePath => $callback) {
            if ($routePath === $currentPath) {
                $callback();
            }
        }

        header('HTTP/1.1 '.$this->responseStatus);
        header('Content-type: '.$this->responseContentType);
        header('Content-length: '.mb_strlen($this->responseBody));
        echo $this->responseBody . PHP_EOL;
    }
}
