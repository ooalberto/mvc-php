<?php

namespace App\Controllers;

// use App\Conn;
//  use App\Models\Client;
// use App\Models\Contact;
use BIRT\Controller\Action;
use BIRT\DI\Container;

class IndexController extends Action
{

    public function index()
    {
        //  $this->view->cars = array("Mustang","Ferrari");
        //  include_once "../App/Views/index/index.phtml";
        // $client = new Client(Conn::getDb());
        // $client = Container::getModel("Client");
        $client = Container::getModel("Client");
        $this->views->clients = $client->fetchAll();
        $this->render("index");
    }

    public function contact()
    {
        // $this->views->cars = array("Mustang","Ferrari");
        // include_once "../App/Views/index/contact.phtml";
        // $contact = new Contact(Conn::getDb());
        // $this->views->contacts = $contact->fetchAll();
        $contact =  Container::getModel("Contact");
        $this->views->contacts = $contact->fetchAll();
        $this->render("contact");
    }
}
