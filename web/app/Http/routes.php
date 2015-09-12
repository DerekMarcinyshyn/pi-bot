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

$app->get('/', function () {
    return view('app');
});

$app->get('tilt/{value}', [
	'uses' => 'PanTiltController@tilt'
]);

$app->get('center', [
	'uses' => 'PanTiltController@center'
]);

$app->get('pan/{value}', [
	'uses' => 'PanTiltController@pan'
]);

$app->get('led-lights/{lights}', [
	'uses' => 'LightController@led'
]);

$app->get('ir-lights/{lights}', [
	'uses' => 'LightController@ir'
]);
