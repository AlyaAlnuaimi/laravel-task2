<?php

use App\Http\Controllers\AdminController;
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
/*
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/categories', [AdminController::class, 'category']);
*/
Route::prefix("/admin")->group(function () {
    Route::resource('categories', CategoriesController::class);
    Route::resource('products', ProductController::class);
  });