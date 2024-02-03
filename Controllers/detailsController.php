<?php
require_once('baseController.php');

class detailsController extends BaseController
{
    function __construct()
    {
        $this->folder = null;
    }

    public function index()
    {
        $this->render('details');
    }

    public function error()
    {
        $this->render('error');
    }
}
