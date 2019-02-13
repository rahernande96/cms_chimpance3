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

Route::get('/home', function(){
	return redirect()->route('anuncios.index');
})->name('home');

Route::get('/register', function(){
	return redirect()->route('login');
})->name('register');

Route::post('/register', function(){
	return redirect()->route('login');
});

Route::group(['middleware' => ['auth']], function () {
    
    Route::resource('/anuncios','AdController');

});

