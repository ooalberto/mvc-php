<?php

namespace App\Controllers;

use App\Conn;
use App\Models\Client;
use BIRT\Controller\Action;

class IndexController extends Action    
{
   
    public function index()
    {
        //  $this->view->cars = array("Mustang","Ferrari");
        //  include_once "../App/Views/index/index.phtml";
         $client = new Client(Conn::getDb());
         $this->views->clients = $client->fetchAll();

          $this->render("index");
    } 

    public function contact()
    {
        $this->views->cars = array("Mustang","Ferrari");
        // include_once "../App/Views/index/contact.phtml";
        $this->render("contact");
    }

   
    
}
