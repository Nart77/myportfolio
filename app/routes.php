<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');


$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

$router->get('products', 'ProductsController@index');
$router->post('products', 'ProductsController@store');

$router->get('products/delete', 'ProductsController@delete');