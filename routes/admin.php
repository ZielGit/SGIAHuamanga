<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
//use App\Http\Controllers\PersonalController;

Route::get('', [HomeController::class, 'index']);

//Route::get('admin/create', [HomeController::class, 'create']);
//Route::resource('personals','App\Http\Controllers\Admin\HomeController');