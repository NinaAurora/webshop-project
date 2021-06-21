<?php

$router->get('', 'app/Http/Controllers/HomeController.php@index');
$router->get('home', 'app/Http/Controllers/HomeController.php');
$router->get('product', 'app/Http/Controllers/ProductController.php@index');

