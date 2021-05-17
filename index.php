<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require_once("vendor/autoload.php");
require_once("data-layer.php");
require_once("validation.php");

$f3 = Base :: instance();


$f3 -> route('GET /', function (){
    $view = new Template();
    echo $view -> render("views/home.html");
});

$f3 -> route('GET|POST /survey', function ($f3){

    //Display the page
    $view = new Template();
    echo $view->render('views/survey.html');

});

$f3->route('GET /summary', function(){

    //Display the second order form
    $view = new Template();
    echo $view->render('views/summary.html');
});

//Run fat free
$f3->run();