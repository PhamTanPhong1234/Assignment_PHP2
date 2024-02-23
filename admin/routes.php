<?php
class routes
{
    private $controllers = [
        'admin' => ['home', 'index'] ,
    ];
    public function checkRoute($controller, $action)
    {
        if (
            !array_key_exists($controller, $this->controllers) ||
            !in_array($action, $this->controllers[$controller])
        ) {
            $this->processRoute('home', 'error');
        } else {
            $this->processRoute($controller, $action);
        }
    }
    public function processRoute($controller, $action)
    {
        include_once('Controllers/' . $controller . 'Controller.php');
        $class = $controller . 'Controller';
        $controller = new $class;
        $controller->$action();
    }
}
