<?php
// Ici interaction avec le model 
// instanciation des variables à passer à la vue
require('../src/Repository/BddConnectorFactory.php');

$connector = BddConnectorFactory::create();
var_dump($connector);
die();
$title = "Accueil";
$body = "home";

require('./templates/layout/layout.phtml');