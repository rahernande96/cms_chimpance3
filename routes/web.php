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
})->name('/');

Auth::routes();

Route::get('/home', function(){
	return redirect()->route('anuncios.index');
})->name('home');

Route::get('/register', function(){
	return redirect()->route('login');
})->name('register');

Route::post('/register', function(){
	return redirect()->route('login');
});

Route::get('/hotel',function(){
	return view('hotel');
})->name('hotel');

Route::get('/habitaciones',function(){
	return view('habitaciones');
})->name('habitaciones');

Route::get('/superior',function(){
	return view('superior');
})->name('superior');

Route::get('/estandar',function(){
	return view('estandar');
})->name('estandar');

Route::group(['middleware' => ['auth']], function () {
    
    Route::resource('/anuncios','AdController');

});

