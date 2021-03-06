<?php

use App\Http\Controllers\AddressController;
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
    return view('index');
});

Route::get("/", [\App\Http\Controllers\AddressController::class, "index"])->name("index");
Route::get("/fetch/", [\App\Http\Controllers\AddressController::class, "district_fetch"])->name("district.fetch");
Route::get("/fetch/commune/", [\App\Http\Controllers\AddressController::class, "commune_fetch"])->name("commune.fetch");