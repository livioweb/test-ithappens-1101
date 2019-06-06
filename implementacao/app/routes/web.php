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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'SiteController@index');


Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name("admin/login");
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/admin/login', 'Auth\LoginController@login');

Auth::routes();

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('customers', 'CustomersController',[
        'names' => [
            'index' =>  'customers',
            'store' =>  'customers.store',
            'create' => 'customers.create',
            'show' =>   'customers.show',
            'edit' =>   'customers.edit',
            'update' => 'customers.update',
            'delete' => 'customers.destroy',
        ]
    ]);

    Route::resource('categories', 'CategoriesController',[
        'names' => [
            'index' =>  'categories',
            'store' =>  'categories.store',
            'create' => 'categories.create',
            'show' =>   'categories.show',
            'edit' =>   'categories.edit',
            'update' => 'categories.update',
            'delete' => 'categories.destroy',
        ]
    ]);
});
