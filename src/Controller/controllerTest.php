<?php

var_dump('test');

require "vendor/autoload.php";

use League\Plates\Engine;
$template = new Engine("template", "phtlm");

echo $template->render("test",["name"=>"robin"]);