<?php
require_once('baseController.php');

class adminController extends BaseController
{
    function __construct()
    {
        $this->folder = null;
    }

    public function index()
    {
        $this->render('home');
    }

    public function error()
    {
        $this->render('error');
    }
}

