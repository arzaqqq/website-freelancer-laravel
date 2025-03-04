<?php

use Illuminate\Support\Facades\Route;

// FRONT {Landing}
use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\MyOrderController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\RequestController;
use App\Http\Controllers\Dashboard\ServiceController;



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

Route::get('detail_booking/{id}',[LandingController::class, 'detail_booking'])->name('detail.booking.landing');
Route::get('booking{id}',[LandingController::class, 'booking'])->name('booking.landing');
Route::get('detail{id}',[LandingController::class, 'detail'])->name('detail.landing');
Route::get('explorer',[LandingController::class, 'explorer'])->name('explorer');
Route::resource('/', LandingController::class);


Route::middleware(['auth:sanctum', 'verified'])
    ->prefix('member')
    ->name('member.')
    ->group(function () {
        //Dashboard
        Route::resource('dashboard', MemberController::class);

        //Service
        Route::resource('service)', ServiceController::class);

        //Request
        Route::get('approve_request/{id}', [RequestController::class, 'approve'])->name('approve.request');
        Route::resource('request', RequestController::class);

        // mY order
        Route::get('accept/order/{id}', [MyOrderController::class, 'accepted'])->name('accept.order');
        Route::get('reject/order/{id}', [MyOrderController::class, 'rejected'])->name('reject.order');
        Route::resource('order', MyOrderController::class);

        //profile
        Route::get('delete_photo', [ProfileController::class, 'delete'])->name('delete.photo.profile');
        Route::resource('profile', ProfileController::class);
        });

