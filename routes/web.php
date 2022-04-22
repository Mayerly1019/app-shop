<?php
Route::get('/', 'TestController@welcome');

// Ruta de autenticación  
Auth::routes();


// se creó controller HomeController 
Route::get('/home', 'HomeController@index')->name('home');
