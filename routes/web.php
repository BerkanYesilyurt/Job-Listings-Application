<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/*
 * Job-Listings-Application
 * Author: Berkan Yeşilyurt (https://github.com/BerkanYesilyurt)
 * Repository: https://github.com/BerkanYesilyurt/Job-Listings-Application
*/

//HomePage
Route::get('/', [ListingController::class, 'index']);

//New Listing
Route::get('create', [ListingController::class, 'create'])->middleware('auth');
Route::post('create', [ListingController::class, 'store'])->middleware('auth');

//Show Single Listing
Route::get('listings/{listing}', [ListingController::class, 'show']);

//Edit Listing
Route::get('listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update Listing
Route::put('listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete Listing
Route::delete('listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Register
Route::get('register', [UserController::class, 'create'])->middleware('guest');
Route::post('register', [UserController::class, 'store']);

//Logout
Route::get('logout', [UserController::class, 'logout'])->middleware('auth');

//Login
Route::get('login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [UserController::class, 'loginNow']);

//Manage Listings
Route::get('manage', [ListingController::class, 'manage'])->middleware('auth');
