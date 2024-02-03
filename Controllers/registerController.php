<?php
require_once('baseController.php');

class registerController extends BaseController
{
    function __construct()
    {
        $this->folder = null;
    }

    public function theme()
    {
        $this->render('register');
    }

    public function error()
    {
        $this->render('error');
    }
}
