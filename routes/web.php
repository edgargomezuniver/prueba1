<?php


Route::get('/', function () {
    return view ('home');
})->name ('home');




Route::view('/contacto','contacto')->name('contacto');

Route::view('/totals','totals')->name('totals');

Route::resource('gastos','GastoController');
Route::resource('ingresos','IngresoController');

Route::post('contacto','MessagesController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');