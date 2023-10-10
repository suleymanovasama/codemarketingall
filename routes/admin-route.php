<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StaticController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix'=>'admin','as'=>'admin.'],function () {
    Route::resource('static',StaticController::class)->except(['show']);
    Route::get('static/status/{id}',[StaticController::class,'status'])->name('status-static');
});
