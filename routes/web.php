<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->post('/users/login', ['uses' => 'Users@getToken']);

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function () use ($router) {
    return str_random(32);
});

// peticion http://localhost/api1/public/users por get Devuelve usuarios
$router->get('/users', ['uses'=>'Users@index']);

// peticion http://localhost/api1/public/users por post Crea un Usuario
$router->post('/users', ['uses'=>'Users@createUser']);


$router->get('/shows', ['uses'=>'showsController@index']);


$router->get('/shows/{text_string}', ['uses'=>'showsController@findShow']);
