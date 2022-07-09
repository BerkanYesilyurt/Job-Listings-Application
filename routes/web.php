<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ListingController::class, 'index']);
Route::get('create', [ListingController::class, 'create'])->middleware('auth');
Route::post('create', [ListingController::class, 'store'])->middleware('auth');
Route::get('listings/{listing}', [ListingController::class, 'show']);
Route::get('listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
Route::put('listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
Route::delete('listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
Route::get('register', [UserController::class, 'create'])->middleware('guest');
Route::post('register', [UserController::class, 'store']);
Route::get('logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [UserController::class, 'loginNow']);
