<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DomainProviderController;
use App\Http\Controllers\HostingProvderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('auth.login');
    });

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/add-new-service', [ServiceController::class, 'index'])->name('add-new-service');
    Route::post('/add-new-service-store', [ServiceController::class, 'store'])->name('add-new-service-store');
    Route::get('/edit-service-item/{id}', [ServiceController::class, 'edit'])->name('edit-service-item');
    Route::post('/update-service-item/{id}', [ServiceController::class, 'update'])->name('update-service-item');
    Route::get('/delete-service-item/{id}', [ServiceController::class, 'delete'])->name('delete-service-item');


    Route::get('/add-new-client', [ClientController::class, 'index'])->name('add-new-client');
    Route::post('/store-new-client', [ClientController::class, 'store'])->name('store-new-client');
    Route::get('/all-clients', [ClientController::class, 'show'])->name('all-clients');

    Route::get('/edit-client/{id}', [ClientController::class, 'edit'])->name('edit-client');
    Route::post('/update-client/{id}', [ClientController::class, 'update'])->name('update-client');
    Route::get('/delete-client/{id}', [ClientController::class, 'delete'])->name('delete-client');

    Route::get('/single-client-info/{id}', [ClientController::class, 'showSingleClientInfo'])->name('single-client-info');

    Route::get('/email', [ClientController::class, 'email'])->name('email');
    
    //Add New Domain Provider's Name
    Route::get('/add-new-domain-provider', [DomainProviderController::class, 'index'])->name('add-new-domain-provider');
    Route::post('/store-new-domain-provider', [DomainProviderController::class, 'store'])->name('store-new-domain-provider');
    Route::post('/show-domain-provider', [DomainProviderController::class, 'show'])->name('show-domain-provider');
    Route::get('/edit-domain-provider/{id}', [DomainProviderController::class, 'edit'])->name('edit-domain-provider');
    Route::post('/update-domain-provider/{id}', [DomainProviderController::class, 'update'])->name('update-domain-provider');

    //Add new Hosting Provider
    Route::get('/add-new-hosting-provider', [HostingProvderController::class, 'index'])->name('add-new-hosting-provider');
    Route::post('/store-new-hosting-provider', [HostingProvderController::class, 'store'])->name('store-new-hosting-provider');
    Route::get('/show-new-hosting-provider', [HostingProvderController::class, 'show'])->name('show-new-hosting-provider');
    Route::get('/edit-hosting-provider/{id}', [HostingProvderController::class, 'edit'])->name('edit-hosting-provider');
    Route::post('/update-hosting-provider/{id}', [HostingProvderController::class, 'update'])->name('update-hosting-provider');
    Route::get('/delete-hosting-provider/{id}', [HostingProvderController::class, 'delete'])->name('delete-hosting-provider');

    //Add new post
    Route::get('/add-new-post', [PostController::class, 'index'])->name('add-new-post');
    Route::post('/store-post', [PostController::class, 'store'])->name('store-post');
    Route::get('/show-all-post', [PostController::class, 'showAllPost'])->name('show-all-post');
    Route::get('/show-single-post/{id}', [PostController::class, 'singlePost'])->name('single-post');
    Route::get('/edit-single-post/{id}', [PostController::class, 'edit'])->name('edit-single-post');
    Route::post('/update-single-post/{id}', [PostController::class, 'update'])->name('update-single-post');
    Route::get('/delete-single-post/{id}', [PostController::class, 'delete'])->name('delete-single-post');

    //show more posts except current one
});

Route::get('/contact-form', function () {
    return view('contact-form');
});
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact-store');

require __DIR__.'/auth.php';
