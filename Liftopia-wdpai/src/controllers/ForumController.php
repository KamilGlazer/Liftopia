<?php

require_once 'AppController.php';
require_once __DIR__.'/../security/AuthMiddleware.php';

class ForumController extends AppController
{
    public function profile(){
        AuthMiddleware::checkLogin();
        return $this->render('profile');
    }
}