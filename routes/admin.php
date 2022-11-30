<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\\Auth\LoginController;


Route::get('/admin-login', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.home');



Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')

->middleware('is_admin');