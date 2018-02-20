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
 * Routes for resource siswa
 */
$router->get('siswa', 'SiswasController@all');
$router->get('siswa/{id}', 'SiswasController@get');
$router->post('siswa', 'SiswasController@add');
$router->put('siswa/{id}', 'SiswasController@put');
$router->delete('siswa/{id}', 'SiswasController@remove');

/**
 * Routes for resource account
 */
$router->get('account', 'AccountsController@all');
$router->get('account/{id}', 'AccountsController@get');
$router->post('account', 'AccountsController@add');
$router->put('account/{id}', 'AccountsController@put');
$router->delete('account/{id}', 'AccountsController@remove');

/**
 * Routes for resource matapelajaran
 */
$router->get('matapelajaran', 'MatapelajaransController@all');
$router->get('matapelajaran/{id}', 'MatapelajaransController@get');
$router->post('matapelajaran', 'MatapelajaransController@add');
$router->put('matapelajaran/{id}', 'MatapelajaransController@put');
$router->delete('matapelajaran/{id}', 'MatapelajaransController@remove');

/**
 * Routes for resource kelas
 */
$router->get('kelas', 'KelasController@all');
$router->get('kelas/{id}', 'KelasController@get');
$router->post('kelas', 'KelasController@add');
$router->put('kelas/{id}', 'KelasController@put');
$router->delete('kelas/{id}', 'KelasController@remove');

/**
 * Routes for resource sekolah
 */
$router->get('sekolah', 'SekolahsController@all');
$router->get('sekolah/{id}', 'SekolahsController@get');
$router->post('sekolah', 'SekolahsController@add');
$router->put('sekolah/{id}', 'SekolahsController@put');
$router->delete('sekolah/{id}', 'SekolahsController@remove');

/**
 * Routes for resource guru
 */
$router->get('guru', 'GurusController@all');
$router->get('guru/{id}', 'GurusController@get');
$router->post('guru', 'GurusController@add');
$router->put('guru/{id}', 'GurusController@put');
$router->delete('guru/{id}', 'GurusController@remove');

/**
 * Routes for resource task
 */
$router->get('task', 'TasksController@all');
$router->get('task/{id}', 'TasksController@get');
$router->post('task', 'TasksController@add');
$router->put('task/{id}', 'TasksController@put');
$router->delete('task/{id}', 'TasksController@remove');

/**
 * Routes for resource acarasekolah
 */
$router->get('acarasekolah', 'AcarasekolahsController@all');
$router->get('acarasekolah/{id}', 'AcarasekolahsController@get');
$router->post('acarasekolah', 'AcarasekolahsController@add');
$router->put('acarasekolah/{id}', 'AcarasekolahsController@put');
$router->delete('acarasekolah/{id}', 'AcarasekolahsController@remove');

/**
 * Routes for resource users
 */
$router->get('users', 'UsersController@all');
$router->get('users/{id}', 'UsersController@get');
$router->post('users', 'UsersController@add');
$router->put('users/{id}', 'UsersController@put');
$router->delete('users/{id}', 'UsersController@remove');
$router->get('users/status/{id}','UsersController@statuscriteria');