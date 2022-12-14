<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});

Route::get('admin', [AdminController::class, 'index'])->name('login');
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::middleware(['admin_auth'])->group(function () {
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('admin/category', [CategoryController::class, 'index'])->name('category');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('logout');
});

