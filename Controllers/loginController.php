<?php
require_once('baseController.php');

class loginController extends BaseController
{
    function __construct()
    {
        $this->folder = null;
    }

    public function theme()
    {
        $this->render('login');
    }

    public function error()
    {
        $this->render('error');
    }
}
