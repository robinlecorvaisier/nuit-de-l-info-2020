<?php

require "../vendor/autoload.php";

$template = new \League\Plates\Engine("templates","phtml");

echo $template->render("home");