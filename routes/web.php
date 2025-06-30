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
use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\GalleryController;

Route::group(['prefix' => 'admin', 'namespace' => 'Backend', 'middleware' => ['auth','verified'], 'as' => 'admin.'], function () {

    Route::get('/home', [HomeController::class, 'home'])->name('home');

    //Company information
    Route::get('/company', [CompanyInfoController::class, 'index'])->name('company.index');
    Route::post('/company/store', [CompanyInfoController::class, 'store'])->name('company.store');
    Route::put('/company/update/{id}', [CompanyInfoController::class, 'update'])->name('company.update');
    Route::delete('/company/delete/{id}', [CompanyInfoController::class, 'destroy'])->name('company.destroy');

    //About Us
    Route::get('/about-us', [AboutUsController::class, 'index'])->name('about.us.index');
    Route::post('/about-us/store', [AboutUsController::class, 'store'])->name('about.us.store');
    Route::put('/about-us/update/{id}', [AboutUsController::class, 'update'])->name('about.us.update');

    //Events
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/event/store', [EventController::class, 'store'])->name('event.store');
    Route::get('event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::put('/event/update/{id}', [EventController::class, 'update'])->name('event.update');
    Route::delete('/company/delete/{id}', [EventController::class, 'destroy'])->name('event.destroy');

    //Gallary
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    // Route::get('gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    // Route::delete('/company/delete/{id}', [EventController::class, 'destroy'])->name('event.destroy');


});

