<?php

class AuthMiddleware
{
    public static function checkLogin()
    {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            $url = "http://$_SERVER[HTTP_HOST]/login";
            header("Location: $url");
            exit();
        }
    }

    public static function logout(){
        session_start();
        session_unset();
        session_destroy();
        $url = "http://$_SERVER[HTTP_HOST]/login";
        header("Location: $url");
        exit();
    }
}
