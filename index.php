<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

$f3->route('GET /', function(){

    //displaying view image
    $view = new Template();
    echo view->render('pets/index.html');
});

f3->route('GET /page2', function(){
echo "Page 2";
});

//run fat-free
$f3->run();