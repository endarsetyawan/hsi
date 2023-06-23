<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\NamaPerusahaanController;
use App\Http\Controllers\UploadController;
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

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/admin', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::resource('beranda', BerandaController::class);

// Route::resource('about', AboutController::class);

Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('about-create', [AboutController::class, 'create'])->name('about-create');
Route::post('about-store', [AboutController::class, 'store'])->name('about-store');
Route::get('about-edit/{id}', [AboutController::class, 'edit'])->name('about-edit');
Route::post('about-update/{id}', [AboutController::class, 'update'])->name('about-update');

Route::get('upload', [UploadController::class, 'index'])->name('upload');
