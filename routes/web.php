<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard']);
    Route::get('polls',[PollController::class,'index'])->name('polls');
    Route::get('poll/create',[PollController::class,'create'])->name('poll.create');
    Route::post('poll/store',[PollController::class, 'store'])->name('poll.store');
    Route::get('poll/edit/{poll_id}', [PollController::class, 'edit'])->name('poll.edit');
    Route::get('poll/delete/{poll_id}', [PollController::class, 'destroy'])->name('poll.destroy');
    Route::get('poll/update/{id}', [PollController::class, 'update'])->name('poll.update');
    // Route::resource('poll', [PollController::class]);
    // CAST VOTE
    Route::get('/poll/cast/new', [VoteController::class,'index'])->name('poll.cast.new');
    Route::get('/poll/cast/',[VoteController::class, 'create'])->name('poll.cast');
    Route::get('/cast', [VoteController::class,'cast']);

    // View Result
    Route::get('/poll/result/{id}', [VoteController::class, 'result'])->name('poll.result');
});
Route::get('coming-soon',[HomeController::class,'coming_soon'])->name('coming-soon');
Route::get('login/redirect', [LoginController::class, 'redirectToProvider']);
Route::get('login/callback', [LoginController::class, 'handleProviderCallback']);
// login route to postlogin method in login controller
Route::get('login', [LoginController::class, 'Login']);
// Post request for postlogin method in login controller
Route::post('login', [LoginController::class, 'postLogin'])->name('login');

// Disable login route form Auth::routes();
Auth::routes(['verify'=> true,'login'=> false]);
// Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::fallback(function(){
    dd('Page not found');
});

// Route for mailing
// Route::get('/mail',[MailController::class, 'InviteMail']);
