<?php

namespace Source\App;

use Source\Core\Controller;


class Login extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");        
    }

    public function login() : void
    {
        echo $this->view->render("login/login", [

        ]); 
    }

    public function error() : void
    {
        echo $this->view->render("/PageError/error", [
        ]);
    }
}