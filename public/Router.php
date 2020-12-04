<?php

$controller = $_GET["controller"];

$route = 'src/Controller/';
header('Location : ' . $route . $controller);
