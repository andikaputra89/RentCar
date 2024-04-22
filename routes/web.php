<?php

use App\Http\Controllers\Carlist;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Galery;
use App\Http\Controllers\Home;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/admin',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);
Route::middleware('auth')->group(function(){
    Route::get('/dashboard',[Dashboard::class,'index']);
    Route::post('/tambah',[MobilController::class,'store']);
    Route::put('/edit/{id}',[MobilController::class,'update']);
    Route::get('/delete/{id}',[MobilController::class,'delete']);

    Route::get('/galery-admin',[Dashboard::class,'galery']);
    Route::post('/tambah-galery',[Dashboard::class,'store']);
    Route::get('/img-dlt/{id}',[Dashboard::class,'delete']);
});
Route::get('/',[Home::class,'index']);
Route::get('/carlist',[Carlist::class,'index']);
Route::get('/galery',[Galery::class,'index']);
Route::get('/about', function(){
    return view('front.about');
});
Route::post('/review',[ReviewController::class,'store']);


