<?php
class routes
{
    private $controllers = [
        'home' => ['home', 'index'] ,
        'product' => ['index'],
        'details' => ['index'],
        'contact' => ['index'],
        'login' => ['theme'],
        'register' => ['theme']
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
        include_once('controllers/' . $controller . 'Controller.php');
        $class = $controller . 'Controller';
        $controller = new $class;
        $controller->$action();
    }
}
