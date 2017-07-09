<?php
Route::get('/', 'HomeController@home')->name('home');
Route::post('contact', 'ContactController@send')->name('contact');
Route::get('/{area}/{regional?}', 'HomeController@area')->name('area');
