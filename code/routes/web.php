<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/contact', function () {
    return view('layouts.contacts');
});

Route::get('/index', function () {
    return view('layouts.home');
});

Route::get('/editorialBoard', function () {
    return view('layouts.editorialBoard');
});

Route::get('/advisoryPanel', function(){
    return view('layouts.advisoryPanel');
});

Route::get('/authorGuidelines', function(){
    return view('layouts.authorGuidelines');
});

Route::get('/reviewerGuidelines', function(){
    return view('layouts.reviewerGuidelines');
});

Route::get('/privacyPolicy', function(){
    return view('layouts.privacyPolicy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
