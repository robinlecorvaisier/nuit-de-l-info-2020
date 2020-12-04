<?php

$controller = $_GET["controller"];

$route = '../src/Controller/';

require($route . $controller.'.php');