<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing; 

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

//all listings
Route::get('/', [ListingController::class,'index']);

//show create form
Route::get('/listings/create', [ListingController::class,'create'])->middleware('auth');

//store listing
Route::post('/listings', [ListingController::class,'store'])->middleware('auth');

//edit listing
Route::get('/listings/{listing}/edit', [ListingController::class,'edit'])->middleware('auth');

//update listing
Route::put('/listings/{listing}', [ListingController::class,'update'])->middleware('auth');

//delete listing
Route::delete('/listings/{listing}', [ListingController::class,'destroy'])->middleware('auth');

//manage listing
Route::get('/listings/manage',[ListingController::class,'manage'])->middleware('auth')  ;

//single listing
Route::get('/listings/{listing}', [ListingController::class,'show']);

//show register create form
Route::get('/register',[UserController::class,'create'])->middleware('guest');

//create new user
Route::post('/users',[UserController::class,'store']);

//logout user
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//create login form
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

//authenticate user
Route::post('users/authenticate',[UserController::class,'authenticate']);





