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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function(){
        return view('dashboard');
    });
    Route::get('polls',[PollController::class,'index'])->name('polls');
    Route::get('poll/create',[PollController::class,'create'])->name('poll.create');
    Route::post('poll/store',[PollController::class, 'store'])->name('poll.store');
    Route::get('poll/edit/{poll_id}', [PollController::class, 'edit'])->name('poll.edit');
    Route::get('poll/delete/{poll_id}', [PollController::class, 'destroy'])->name('poll.destroy');
    Route::get('coming-soon',[HomeController::class,'coming_soon'])->name('coming-soon');
});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
