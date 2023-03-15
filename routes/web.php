<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home-page');
Route::get('/single-post', [FrontendController::class, 'singlePost'])->name('single-post');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/category', [FrontendController::class, 'category'])->name('category');

Route::get('/search-result', [FrontendController::class, 'search'])->name('search-result');
//admin panel

Route::get('/admin/dashboard', [AdminController::class, 'adminPage'])->name('admin.dashboard');

Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::get('/create', [CategoryController::class, 'create'])->name('create');
Route::post('/create', [CategoryController::class, 'store'])->name('store');
Route::get('/show', [CategoryController::class, 'show'])->name('show');

Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
Route::post('/edit', [CategoryController::class, 'update'])->name('update');
