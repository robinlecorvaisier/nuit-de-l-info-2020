<?php

$controller = (!empty($_GET["controller"])) ? $_GET["controller"] : 'home_controller'   ;

$route = '../src/Controller/';

$valid_controller = [
    "test_controller",
    "home_controller",
];

// test validation page
foreach($valid_controller as $valid){
    if ($valid == $controller){
        require($route . $controller.'.php');
    } else {
        require($route.'404_controller.php');
    }
}