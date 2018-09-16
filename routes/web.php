<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
	'companies'		=>  'CompanyController',
	'projects'		=>	'ProjectController',
	'tasks'			=>  'TaskController',
	'posts'			=>  'PostController',
	'users'			=>  'UserController',
]);

Route::get('/credits', function () {
	return view('credits');
});





// Route::group(['prefix' => 'companies'], function(){
// 	$this->get('/', 'CompanyController@index')->name('companies');
// 	$this->get('/create', 'CompanyController@create')->name('companies.create');
// 	$this->post('/store', 'CompanyController@store')->name('companies.store');
// 	$this->get('/{id}', 'CompanyController@show')->name('companies.show');
// 	$this->get('/{id}/edit', 'CompanyController@edit')->name('companies.edit');
// 	$this->put('/{id}/update', 'CompanyController@update')->name('companies.update');
// 	$this->delete('/{id}/destroy', 'CompanyController@destroy')->name('companies.destroy');
// });
//
// Route::group(['prefix' => 'projects'], function(){
// 	$this->get('/', 'ProjectController@index')->name('projects');
// 	$this->get('/create', 'ProjectController@create')->name('projects.create');
// 	$this->post('/store', 'ProjectController@store')->name('projects.store');
// 	$this->get('/{id}', 'ProjectController@show')->name('projects.show');
// 	$this->get('/{id}/edit', 'ProjectController@edit')->name('projects.edit');
// 	$this->put('/{id}/update', 'ProjectController@update')->name('projects.update');
// 	$this->delete('/{id}/destroy', 'ProjectController@destroy')->name('projects.destroy');
// });
//
// Route::group(['prefix' => 'tasks'], function(){
// 	$this->get('/', 'TaskController@index')->name('tasks');
// 	$this->get('/create', 'TaskController@create')->name('tasks.create');
// 	$this->post('/store', 'TaskController@store')->name('tasks.store');
// 	$this->get('/{id}', 'TaskController@show')->name('tasks.show');
// 	$this->get('/{id}/edit', 'TaskController@edit')->name('tasks.edit');
// 	$this->put('/{id}/update', 'TaskController@update')->name('tasks.update');
// 	$this->delete('/{id}/destroy', 'TaskController@destroy')->name('tasks.destroy');
// });
//
// Route::group(['prefix' => 'posts'], function(){
// 	$this->get('/', 'PostController@index')->name('posts');
// 	$this->get('/create', 'PostController@create')->name('posts.create');
// 	$this->post('/store', 'PostController@store')->name('posts.store');
// 	$this->get('/{id}', 'PostController@show')->name('posts.show');
// 	$this->get('/{id}/edit', 'PostController@edit')->name('posts.edit');
// 	$this->put('/{id}/update', 'PostController@update')->name('posts.update');
// 	$this->delete('/{id}/destroy', 'PostController@destroy')->name('posts.destroy');
// });
//
// Route::group(['prefix' => 'users'], function(){
// 	$this->get('/', 'UserController@index')->name('users');
// 	$this->get('/create', 'UserController@create')->name('users.create');
// 	$this->post('/store', 'UserController@store')->name('users.store');
// 	$this->get('/{id}', 'UserController@show')->name('users.show');
// 	$this->get('/{id}/edit', 'UserController@edit')->name('users.edit');
// 	$this->put('/{id}/update', 'UserController@update')->name('users.update');
// 	$this->delete('/{id}/destroy', 'UserController@destroy')->name('users.destroy');
// });

// Route::group(['prefix' => 'comments'], function(){
// 	$this->get('/', 'ProjectController@index')->name('projects');
// 	$this->get('/create', 'ProjectController@create')->name('projects.create');
// 	$this->post('/store', 'ProjectController@store')->name('projects.store');
// 	$this->get('/{id}', 'ProjectController@show')->name('projects.show');
// 	$this->get('/{id}/edit', 'ProjectController@edit')->name('projects.edit');
// 	$this->put('/{id}/update', 'ProjectController@update')->name('projects.update');
// 	$this->delete('/{id}/destroy', 'ProjectController@destroy')->name('projects.destroy');
// });

