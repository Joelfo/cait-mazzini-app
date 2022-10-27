<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
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
    return redirect('/patients');
});

Route::get('/token', function(){
    echo csrf_token();
});

Route::resource('/patients', PatientController::class)->only(['index', 'create', 'store', 'destroy']);


Route::resource('/users', UserController::class);

