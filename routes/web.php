<?php

use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/track', function (){
    return view('track');
});

Route::get('/invoices', [Controller::class, 'invoices']);

Route::post('/track', [Controller::class, 'tracks']);

Route::post('/custom-login', [Controller::class, 'customLogin']);

Route::post('/custom-registration', [Controller::class, 'customRegistration']);

Route::get('logout', [Controller::class, 'logout']);

Route::post('/generate', [Controller::class, 'generate']);
