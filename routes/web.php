<?php

use Illuminate\Support\Facades\Route;

// FRONT {Landing}
use App\Http\Controllers\Landing\LandingController;



// MEMBER {Dashboard}




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


Route::resource('/', LandingController::class);
