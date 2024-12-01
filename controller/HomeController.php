<?php

namespace Controller;
use Model\Connect;

class HomeController {

    /* Lister les <films></films>*/
    public function index() {

        $pdo = Connect::seConnecter();
       

        require "view/template/home.php";

    }
}

