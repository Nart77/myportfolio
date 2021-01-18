<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');



$router->get('login', 'LoginController@index');
$router->post('login', 'LoginController@login');
$router->get('logout', 'LoginController@logout');

$router->get('products', 'ProductsController@index');
$router->post('products', 'ProductsController@store');
$router->get('products/delete', 'ProductsController@delete');
$router->get('products/delete', 'ProductsController@delete2');

$router->get('register', 'RegisterController@index');
$router->post('register', 'RegisterController@store');

$router->get('users', 'UsersController@index');