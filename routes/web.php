<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//+++++++++++++++++++++++++Frontend Starts++++++++++++++++++++++++++++++++++
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\SubscriptionController;
use App\Http\Controllers\Frontend\EventController;

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {

    //Front pages
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('about.us');
    Route::get('/gallery', [IndexController::class, 'gallery'])->name('gallery');
    
    //Contact
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

    //Subscription
    Route::post('/subscribe/store', [SubscriptionController::class, 'store'])->name('subscribe.store');

    //Events
    Route::get('/events/index', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
    Route::post('/events/register/{id}', [EventController::class, 'register'])->name('events.register');


});
//+++++++++++++++++++++++++Frontend Ends++++++++++++++++++++++++++++++++++++

Auth::routes();


//+++++++++++++++++++++++++Backend Starts++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CompanyInfoController;
use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\EventController as AdminEventController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SocialController;
use App\Http\Controllers\Backend\ContactController as AdminContactController;

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
    Route::get('/events', [AdminEventController::class, 'index'])->name('events.index');
    Route::get('event/create', [AdminEventController::class, 'create'])->name('event.create');
    Route::post('/event/store', [AdminEventController::class, 'store'])->name('event.store');
    Route::get('event/edit/{id}', [AdminEventController::class, 'edit'])->name('event.edit');
    Route::put('/event/update/{id}', [AdminEventController::class, 'update'])->name('event.update');
    Route::delete('/company/delete/{id}', [AdminEventController::class, 'destroy'])->name('event.destroy');

    //Gallary
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::put('/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/gallary/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

    // Services
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/edit/{id}', [ServiceController::class, 'edit'])->name('services.edit'); // optional
    Route::put('/services/update/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/delete/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    // Socials
    Route::get('/socials', [SocialController::class, 'index'])->name('socials.index');
    Route::get('/socials/create', [SocialController::class, 'create'])->name('socials.create');
    Route::post('/socials/store', [SocialController::class, 'store'])->name('socials.store');
    Route::get('/socials/edit/{id}', [SocialController::class, 'edit'])->name('socials.edit'); // optional
    Route::put('/socials/update/{id}', [SocialController::class, 'update'])->name('socials.update');
    Route::delete('/socials/delete/{id}', [SocialController::class, 'destroy'])->name('socials.destroy');

    //Contact us
    Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');


});

