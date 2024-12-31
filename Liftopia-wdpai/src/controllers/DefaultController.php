<?php

require_once 'AppController.php';
require_once __DIR__.'/../security/AuthMiddleware.php';

class DefaultController extends AppController{
    
    public function index() {
        $this->render('index');
    }

    public function login(){
        session_start();

        if (isset($_SESSION['user_id'])) {
            $url = "http://$_SERVER[HTTP_HOST]/base";
            header("Location: $url");
            exit();
        }

        $this->render('login');
    }

    public function register(){
        $this->render('register');
    }

    public function base(){
        AuthMiddleware::checkLogin();
        $this->render('base');
    }
}