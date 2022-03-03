<?php

Route::get('/', 'HomeController@index')->name('front.index');
Route::get('/about', 'HomeController@about')->name('front.about');
Route::get('/blogs', 'HomeController@blogs')->name('front.blogs');
Route::get('/portfolio', 'HomeController@portfolio')->name('front.portfolio');
Route::get('/contact', 'HomeController@contact')->name('front.contact');

