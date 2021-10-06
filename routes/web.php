<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Authentication@login');
Route::get('index', 'Super@dashboard');
Route::get('userMgmt', 'Super@userMgmt');
Route::post('addUser', 'Super@addUser');