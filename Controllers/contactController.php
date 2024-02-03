<?php
require_once('baseController.php');

class contactController extends BaseController
{
    function __construct()
    {
        $this->folder = null;
    }

    public function index()
    {
        $this->render('contact');
    }

    public function error()
    {
        $this->render('error');
    }
}
