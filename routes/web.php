<?php


Route::get('/', function () {
    return view ('home');
})->name ('home');




Route::view('/contact','contact')->name('contact');

Route::post('contact','MessagesController@store');


Route::view('/totals','totals')->name('totals');

Route::resource('gastos','GastoController');

Route::resource('ingresos','IngresoController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index');
Route::get('/redirect', 'HomeController@redirect');
Route::get('/callback', 'HomeController@callback');