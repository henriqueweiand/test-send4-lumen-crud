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

/**
 * Routes for resource task
 */
$router->get('users', 'UsersController@index');
$router->get('users/{id}', 'UsersController@show');
$router->post('users', 'UsersController@store');
$router->put('users/{id}', 'UsersController@update');
$router->delete('users/{id}', 'UsersController@destroy');
