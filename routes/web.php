<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
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


Route::get('/', [ProductController::class, 'index']);
Route::get('/admin', [ProductController::class, 'categoryadd']);
Route::get('/admin/category', [CategoryController::class, 'create']);
Route::post('/admin/category/create', [CategoryController::class, 'store']);
Route::post('/admin/create',[ProductController::class,'store']);
Route::get('/sesi',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);
Route::get('/sesi/logout',[SessionController::class,'logout']);
Route::get('/sesi/register',[SessionController::class,'register']);
Route::post('/sesi/create',[SessionController::class,'create']);