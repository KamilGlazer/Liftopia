<?php


require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path,PHP_URL_PATH);

Routing::get('','DefaultController');
Routing::get('login','DefaultController');
Routing::get('register','DefaultController');
Routing::post('register','SecurityController');
Routing::post('login',"SecurityController");
Routing::get('base',"DefaultController");
Routing::post('logout',"SecurityController");
Routing::get('profile',"ProfileController");
Routing::post('update',"ProfileController");
Routing::get('section/{id}',"SectionController");
Routing::post('search',"SectionController");
Routing::post('createTopic/{id}',"SectionController");
Routing::run($path);
