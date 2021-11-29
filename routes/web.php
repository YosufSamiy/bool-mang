<?php

use App\Http\Controllers\Auth\CustamAuthController;
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

Route::get('login', function () {
    return view('auth.login');
})->name('login');


Route::get('admin',[CustamAuthController::class,'admin'])->middleware('auth::admin');
Route::get('user',[CustamAuthController::class,'user'])->middleware('auth:user');