<?php

use App\Router;

session_start();


require __DIR__ . '/../vendor/autoload.php';

var_dump(Router::getController());