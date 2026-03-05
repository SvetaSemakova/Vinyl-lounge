<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VinylController;
use App\Http\Controllers\AdminController;

Route::get('/', [VinylController::class, 'home'])->name('home');

Route::post('/contact', [VinylController::class, 'submit'])->name('contact.submit');

Route::post('/review', [VinylController::class, 'submitrate'])->name('reviews.submit');

Route::get('/catalog', [VinylController::class, 'catalog'])->name('catalog');

Route::get('/home', [VinylController::class, 'home'])->name('home');

Route::get('/about', [VinylController::class, 'about'])->name('about');

Route::get('/reviews', [VinylController::class, 'reviews'])->name('reviews');

Route::get('/contact', [VinylController::class, 'contact'])->name('contact');

Route::get('/register', [VinylController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [VinylController::class, 'register'])->name('register');

Route::get('/authorization', [VinylController::class, 'showLoginForm'])->name('authorization');
Route::post('/authorization', [VinylController::class, 'login'])->name('login');
Route::post('/logout', [VinylController::class, 'logout'])->name('logout');


Route::get('/product/{id}', [VinylController::class, 'show'])->name('product');

Route::get('/cart', [VinylController::class, 'cart'])->name('cart');
Route::post('/cart/add/{id}', [VinylController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove/{id}', [VinylController::class, 'removeFromCart'])->name('cart.remove');

Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home');
    Route::post('/home', [AdminController::class, 'add'])->name('home');
    Route::post('/home/{id}', [AdminController::class, 'destroy'])->name('destroy');
    Route::post('/review/{id}', [AdminController::class, 'destroy_review'])->name('destroy_review');
    Route::post('/quest/{id}', [AdminController::class, 'destroy_quest'])->name('destroy_quest');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [AdminController::class, 'update'])->name('update');
    Route::get('/review', [AdminController::class, 'review'])->name('review');
    Route::get('/quest', [AdminController::class, 'quest'])->name('quest');
    Route::get('/users', [AdminController::class, 'users'])->name('users');

});
