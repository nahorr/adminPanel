<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//+++++++++++++++++++++++++Frontend Starts++++++++++++++++++++++++++++++++++
use App\Http\Controllers\Frontend\IndexController;

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {

    //Index page
    Route::get('/', [IndexController::class, 'index'])->name('index');

});
//+++++++++++++++++++++++++Frontend Ends++++++++++++++++++++++++++++++++++++

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//+++++++++++++++++++++++++Backend Starts++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
use App\Http\Controllers\Backend\HomeController;


Route::group(['prefix' => 'admin', 'namespace' => 'Backend', 'middleware' => ['auth','verified'], 'as' => 'admin.'], function () {

    Route::get('/home', [HomeController::class, 'home'])->name('home');

});

