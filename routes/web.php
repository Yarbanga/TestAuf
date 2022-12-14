<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AufController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth']], function () { 
    Route::post('/deconnexion', [AdminController::class, 'deconnexion'])->name('deconnexion');
    Route::resource('user',AufController::class);
});
Route::get('/', [AdminController::class, 'login'])->name('login.auth');
Route::post('/login', [AdminController::class, 'authenticate'])->name('login.auth');