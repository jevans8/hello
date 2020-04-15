<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Instantiate the framework (Base class)
$f3 = Base::instance(); //Class::method()

//Define a default route (hello directory with nothing after it)
$f3->route('GET /', function(){

    //echo '<h1>Hello, world!</h1>';

    $view = new Template();
    echo $view->render('views/home.html');
});

//Run the framework (fat free)
$f3->run();

