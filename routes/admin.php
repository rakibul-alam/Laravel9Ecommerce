<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\\Auth\LoginController;


Route::get('/admin-login', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login');


Route::group(['namespace'=>'App\Http\Controllers\Admin','middleware'=>'is_admin'], function(){
  Route::get('admin/home', 'AdminController@admin')->name('admin.home');
  Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');
});

// category route
Route::group(['prefix'=>'category'], function(){
    Route::get('/', 'CategoryController@index')->name('categogy');
});


// Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')

// ->middleware('is_admin');