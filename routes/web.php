<?php

use App\Http\Controllers\AviaTicketController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/avia', [AviaTicketController::class, 'index'])->name('avia.index');
Route::post('/avia', [AviaTicketController::class, 'find'])->name('avia.find');
