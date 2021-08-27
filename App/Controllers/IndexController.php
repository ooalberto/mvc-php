<?php

namespace App\Controllers;

class IndexController
{
    private $view;

    public function __construct()
    {
        $this->view = new \stdClass;
    }
    public function index()
    {
        $this->view->cars = array("Mustang","Ferrari");
        // include_once "../App/Views/index/index.phtml";
        $this->render("index");
    } 

    public function contact()
    {
        $this->view->cars = array("Mustang","Ferrari");
        // include_once "../App/Views/index/contact.phtml";
        $this->render("contact");
    }

    public function render($action)
    {
        $current = get_class($this);
        $singleCassName = strtolower(str_replace("Controller", "", str_replace("App\\Controllers\\", "", $current)));

        include_once "../App/Views/" . $singleCassName . "/" . $action . ".phtml";
    }
    
    
}
