<?php

use App\Http\Controllers\DoctorQueueController;
use App\Http\Controllers\GeneralConsentController;
use App\Http\Controllers\MinutesOfMeetingController;
use App\Http\Controllers\PharmacyQueueController;
use App\Http\Controllers\TakeQueueController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/general-consent', [GeneralConsentController::class, 'index'])->name('general-consent');
Route::get('/minutes-of-meeting', [MinutesOfMeetingController::class, 'index'])->name('minutes-of-meeting');
Route::get('/doctor-queue', [DoctorQueueController::class, 'index'])->name('doctor-queue');
Route::get('/pharmacy-queue', [PharmacyQueueController::class, 'index'])->name('pharmacy-queue');
Route::get('/take-queue', [TakeQueueController::class, 'index'])->name('take-queue');
