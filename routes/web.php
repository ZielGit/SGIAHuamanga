<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;

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


//el auth login debe ir en routeserviceprovider si quiere pedir logeo primero
/*Route::get('/', function () {
    return view('auth.login');
});*/

Route::get('/', [PersonalController::class, 'index']);
/*
Route::get('personal/create', [PersonalController::class, 'create']);
*/
Route::resource('personal',PersonalController::class);
/*
Route::get('personal/{personal}/edit', [PersonalController::class, 'edit'])->parameter($personal);
*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
