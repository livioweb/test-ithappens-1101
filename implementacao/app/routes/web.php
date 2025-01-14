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

    Route::resource('users', 'UsersController',[
        'names' => [
            'index' =>  'users',
            'store' =>  'users.store',
            'create' => 'users.create',
            'show' =>   'users.show',
            'edit' =>   'users.edit',
            'update' => 'users.update',
            'delete' => 'users.destroy',
        ]
    ]);

    Route::resource('products', 'ProductsController',[
        'names' => [
            'index' =>  'products',
            'store' =>  'products.store',
            'create' => 'products.create',
            'show' =>   'products.show',
            'edit' =>   'products.edit',
            'update' => 'products.update',
            'delete' => 'products.destroy',
        ]
    ]);

    Route::resource('stores', 'StoresController',[
        'names' => [
            'index' =>  'stores',
            'store' =>  'stores.store',
            'create' => 'stores.create',
            'show' =>   'stores.show',
            'edit' =>   'stores.edit',
            'update' => 'stores.update',
            'delete' => 'stores.destroy',
        ]
    ]);

    Route::resource('stocks', 'StocksController',[
        'names' => [
            'index' =>  'stocks',
            'store' =>  'stocks.store',
            'create' => 'stocks.create',
            'show' =>   'stocks.show',
            'edit' =>   'stocks.edit',
            'update' => 'stocks.update',
            'delete' => 'stocks.destroy',
        ]
    ]);

    Route::resource('orders', 'OrdersController',[
        'names' => [
            'index' =>  'orders',
            'store' =>  'orders.store',
            'create' => 'orders.create',
            'show' =>   'orders.show',
            'edit' =>   'orders.edit',
            'update' => 'orders.update',
            'delete' => 'orders.destroy',
        ]
    ]);
});
