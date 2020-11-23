<?php

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
use App\Http\Controllers\CodigoFacilitoOauthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirect', [CodigoFacilitoOauthController::class, 'redirect'])->name('redirect');
Route::get('/facilito_callback', [CodigoFacilitoOauthController::class, 'responseCallback'])->name('facilito_callback');