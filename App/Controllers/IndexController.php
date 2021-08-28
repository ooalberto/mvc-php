<?php

namespace App\Controllers;

use BIRT\Controller\Action;

class IndexController extends Action    
{
   
    public function index()
    {
        $this->view->cars = array("Mustang","Ferrari");
        // include_once "../App/Views/index/index.phtml";
        $this->render("index",true);
    } 

    public function contact()
    {
        $this->view->cars = array("Mustang","Ferrari");
        // include_once "../App/Views/index/contact.phtml";
        $this->render("contact");
    }

   
    
}
