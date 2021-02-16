<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PollController;
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
    return view('dashboard');
});
Route::middleware(['auth'])->group(function () {
    Route::get('polls',[PollController::class,'index'])->name('polls');
    Route::get('poll/create',[PollController::class,'create'])->name('poll.create');
    Route::post('poll/store',[PollController::class, 'store'])->name('poll.store');
});
Route::get('coming-soon',[HomeController::class,'coming_soon'])->name('coming-soon');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
