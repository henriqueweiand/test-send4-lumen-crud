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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'users'], function () use ($router) {
    $router->get('/', 'UsersController@index');
    $router->get('/{id}', 'UsersController@show');
    $router->post('/', 'UsersController@store');
    $router->put('/{id}', 'UsersController@update');
    $router->delete('/{id}', 'UsersController@destroy');
});

$router->group(['prefix' => 'messages'], function () use ($router) {
    $router->get('/', 'MessagesController@index');
    $router->get('/{id}', 'MessagesController@show');
    $router->get('/user/{id}', 'MessagesController@show_user_messages');
    $router->post('/', 'MessagesController@store');
    $router->put('/{id}', 'MessagesController@update');
    $router->delete('/{id}', 'MessagesController@destroy');
});
