<?php

namespace BIRT\Controller;

abstract class Action
{
    protected $view;
    private $action;

    public function __construct()
    {
        $this->view = new \stdClass;
    }

    protected function render($action)
    {
        $this->action = $action;
        $current = get_class($this);
        $singleCassName = strtolower(str_replace("Controller", "", str_replace("App\\Controllers\\", "", $current)));

        include_once "../App/Views/" . $singleCassName . "/" .  $this->action . ".phtml";
    }
}
