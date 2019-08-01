<?php

Route::get('/','connectParentController@connect')->name('connect');

Auth::routes();

Route::get('/home', 'homeController@home')->name('home');
