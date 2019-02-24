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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

route::get('/', 'PagesController@home');
route::get('/about', 'PagesController@about');
route::get('/contact', 'PagesController@contact');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');


route::resource('projects', 'ProjectsController'); // equal to everything below
// route::get('/projects', 'ProjectsController@index');
// route::post('/projects', 'ProjectsController@store');
// route::get('/projects/create', 'ProjectsController@create');
// route::get('/projects/{project}', 'ProjectsController@show');
// route::patch('/projects/{project}', 'ProjectsController@update');
// route::delete('/projects/{project}', 'ProjectsController@destroy');
// route::get('/projects/{project}/edit', 'ProjectsController@edit');
