<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//+++++++++++++++++++++++++Frontend Starts++++++++++++++++++++++++++++++++++
use App\Http\Controllers\Frontend\IndexController;

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {

    //Front pages
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('about.us');
    Route::get('/events', [IndexController::class, 'events'])->name('events');
    Route::get('/gallery', [IndexController::class, 'gallery'])->name('gallery');
    Route::get('/contact', [IndexController::class, 'contact'])->name('contact');

});
//+++++++++++++++++++++++++Frontend Ends++++++++++++++++++++++++++++++++++++

Auth::routes();


//+++++++++++++++++++++++++Backend Starts++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CompanyInfoController;


Route::group(['prefix' => 'admin', 'namespace' => 'Backend', 'middleware' => ['auth','verified'], 'as' => 'admin.'], function () {

    Route::get('/home', [HomeController::class, 'home'])->name('home');

    //Company information
    Route::get('/company', [CompanyInfoController::class, 'index'])->name('company.index');
    Route::post('/company/store', [CompanyInfoController::class, 'store'])->name('company.store');
    Route::put('/company/update/{id}', [CompanyInfoController::class, 'update'])->name('company.update');
    Route::delete('/company/delete/{id}', [CompanyInfoController::class, 'destroy'])->name('company.destroy');


});

