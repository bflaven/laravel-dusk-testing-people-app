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

/* manage routes for People */
Route::get('people', array('as' => 'people.index', 'uses' => 'PeopleController@index'));
Route::get('people/add', array('as' => 'people.create', 'uses' => 'PeopleController@create'));
Route::post('people/store', array('as' => 'people.store', 'uses' => 'PeopleController@store'));
Route::get('people/edit/{id}', array('as' => 'people.edit', 'uses' => 'PeopleController@edit'));
Route::patch('people/update/{id}', array('as' => 'people.update', 'uses' => 'PeopleController@update'));
Route::delete('people/delete/{id}', array('as' => 'people.destroy', 'uses' => 'PeopleController@destroy'));
Route::get('people/{username}', array('as' => 'people.show', 'uses' => 'PeopleController@show'));



/* for the login */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

