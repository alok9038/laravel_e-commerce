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

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/category', function () {
    return view('admin.product_manager.categories');
});

Route::get('/sub-category', function () {
    return view('admin.product_manager.sub-categories');
});

require __DIR__.'/auth.php';
