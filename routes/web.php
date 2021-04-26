<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'api'], function () use ($router) {
	$router->get('jobs', ['uses' => 'JobController@showAllJobs']);
	$router->get('jobs/{id}', ['uses' => 'JobController@showOneJob']);
	$router->post('jobs', ['uses' => 'JobController@create']);
	$router->delete('jobs/{id}', ['uses' => 'JobController@delete']);
	$router->put('jobs/{id}', ['uses' => 'JobController@update']);
});

// $router->get('/about', function () use ($router) {
// 	return "About the API";
// });

// $router->get('/job/{id}', function ($id) {
// 	return "Job: " . $id;
// });