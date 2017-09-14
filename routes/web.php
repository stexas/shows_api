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

//Index del api
$router->get('/shows', ['uses'=>'showsController@index']);

//Busqueda de shows, solo permitida por metodo get
$router->get('/shows/{text_string}', ['uses'=>'showsController@findShow']);

//Methodo no permitido, aunque fallaria en cualquier caso, sirve para indicar la razón del fallo
$router->post('/shows/{text_string}', ['uses'=>'showsController@methodNotAllowed']);
