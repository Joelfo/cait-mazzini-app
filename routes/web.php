<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\HealthUnityController;
use App\Http\Controllers\NationalityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RelapseController;
use App\Http\Controllers\ReleaseController;
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

Route::resource('/patients', PatientController::class)->except(['show']);

Route::resource('/healthUnities', HealthUnityController::class)->except(['show']);

Route::resource('/cities', CityController::class)->except(['show']);

Route::resource('/districts', DistrictController::class)->except(['show']);

Route::resource('/nationalities', NationalityController::class);

Route::resource('/relapses', RelapseController::class);

Route::resource('/releases', ReleaseController::class);

Route::resource('/users', UserController::class);

