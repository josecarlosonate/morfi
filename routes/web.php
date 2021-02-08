<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'WelcomeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/users', 'UserController');
Route::resource('servicios', 'ServiciosController');
Route::resource('roles', 'RoleController');


# Annexe Routes for web.php
Route::resource('annexes', 'AnnexeController');
