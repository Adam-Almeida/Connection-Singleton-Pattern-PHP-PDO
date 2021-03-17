<?php

require __DIR__ . "/vendor/autoload.php";

echo "Hello Word! php Lovers</br></br>";

$connect = \Source\Core\Connect::getInstance();
var_dump($connect);