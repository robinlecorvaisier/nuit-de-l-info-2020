<?php

use League\Plates\Engine;

require "../vendor/autoload.php";

$template = new Engine("templates","phtml");

echo $template->render("views/home");