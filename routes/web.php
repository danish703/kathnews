<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleNewsController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;



Route::get('/',[HomeController::class,'homePage']);
Route::get('details/',[SingleNewsController::class,'index']);
Route::get('signup/',[SignupController::class,'index'])->name('signup');
Route::get('login/',[LoginController::class,'index'])->name('login');
Route::get('dashboard/',[DashboardController::class,'index'])->name('dashboard');
Route::get('dashboard/category',[CategoryController::class,'index'])->name('category');
Route::get('dashboard/addNews',[NewsController::class,'index'])->name('addNews');
//post 

Route::post('signup/',[SignupController::class,'doSignup'])->name('signup');
Route::post('login/',[LoginController::class,'doLogin'])->name('login');
Route::post('dashboard/category',[CategoryController::class,'doStore'])->name('category');
Route::post('dashboard/addNews',[NewsController::class,'doStore'])->name('addNews');


