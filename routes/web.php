<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\flights\FlightsController;
use App\Http\Controllers\flights\FlightsPdfController;

use App\Http\Controllers\services\AirportServiceController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');


/** Flight **/
Route::get('/flights', [FlightsController::class, 'index'])->name('flights');
Route::get('/flight-list', [FlightsController::class, 'list'])->name('flight-list');
Route::get('/flight-details/{id}', [FlightsController::class, 'details'])->name('flight-details');
Route::post('/flight-submit/{id}',[FlightsController::class,'createBooking'])->name('flights.booking');
Route::post('/flight-search',[FlightsController::class,'searchFlight'])->name('flights.search');
Route::get('/flights/booking-confirmation/{id}',[FlightsController::class,'bookingConfirmnation'])->name('flight-book-success');

Route::get('/flights/itirenary/{id}',[FlightsPdfController::class,'generatePdf'])->name('flight-pdf');

/** Import **/
Route::get('/import', [AirportServiceController::class, 'index']);
Route::post('/import/airports', [AirportServiceController::class, 'migrateAirports'])->name('migrate.airports');
