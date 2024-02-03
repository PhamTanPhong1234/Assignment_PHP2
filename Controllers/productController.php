<?php
require_once('baseController.php');

class productController extends BaseController
{
    function __construct()
    {
        $this->folder = null;
    }

    public function index()
    {
        $this->render('product');
    }

    public function error()
    {
        $this->render('error');
    }
}
