<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// All listings 
Route::get('/', 
[ListingController::class, 'index']);

// single listing
Route::get('/listings/{listing}',
[ListingController::class,'show']);

// Common Resources Routes:
// index -  show all listings
// show - show single listing
// create - show form to create listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destroy - delete listing
