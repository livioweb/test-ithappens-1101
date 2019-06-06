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

    Route::get('/numero_processo', 'LedgerBookController@numeroProcesso')->name('/admin/numero_processo');

    Route::resource('ledgerbooks', 'LedgerBookController',[
        'names' => [
            'index' => 'ledgerbooks',
            'store' => 'ledgerbooks.store',
            'create' => 'ledgerbooks.create',
            'show' => 'ledgerbooks.show',
            'edit' => 'ledgerbooks.edit',
            // etc...
        ]
    ]);

});

Route::get('export', 'MyController@export')->name('export');

Route::get('importExportView', 'MyController@importExportView');

Route::post('import', 'MyController@import')->name('import');