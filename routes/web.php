<?php
Route::get('/admin', 'PostController@index');
Route::resource('posts', 'PostController');

Route::get('/', 'HomeController@home')->name('home');
Route::get('/home', 'HomeController@home')->name('home');

Route::post('contact', 'ContactController@send')->name('contact');
Route::get('/area/{area}/{regional?}', 'HomeController@area')->name('area');

Auth::routes();

