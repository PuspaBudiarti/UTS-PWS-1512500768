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

$app->get('/', function () use ($app) {
    return $app->version();
}
);
$app->get('/kategoripulu', 'KategoriController@index');
$app->get('/kategoripulu/{id}', 'KategoriController@show');
$app->post('/kategoripulu', 'KategoriController@store');
$app->put('/kategoripulu/{id}', 'KategoriController@update');
$app->delete('/kategoripulu/{id}', 'KategoriController@destroy');

  $app->get('/bukupulu', 'KategoriController@buku');
$app->get('/bukupulu/{id_book}', 'KategoriController@showbuku');
$app->post('/bukupulu', 'KategoriController@storebuku');
$app->put ('/bukupulu/{id_book}', 'KategoriController@updatebuku');
$app->delete('/bukupulu/{id_book}', 'KategoriController@destroybuku');
