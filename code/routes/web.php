<?php

// use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\JournalAdmin\PermissionController;
use App\Http\Controllers\JournalAdmin\RoleController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserAndRoleManagement\UserRoleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\GoogleRegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAndRoleManagement\CreateUserController;
use App\Http\Controllers\UserAndRoleManagement\JournalAdminDashboardController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\journalAdmin;

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
    return view('layouts.dashboard.author');
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

// Route::get('sendNotification',[NotificationController::class,"sendNotification"]);

Route::get('/dashboard', function () {
    return view('layouts.dashboard.main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard1', function () {
    return view('layouts.dashboard.header');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/author', function () {
    return view('layouts.dashboard.author');
})->middleware(['auth', 'verified', 'role:author'])->name('author');

// Route::get('/journalAdmin', function () {
//     return view('layouts.dashboard.journalAdmin');
// })->middleware(['auth', 'verified', 'role:journalAdmin'])->name('journalAdmin');

Route::middleware(['auth', 'verified', 'role:journalAdmin'])->prefix('journalAdmin')->group(function(){
    // Route::get('/',[JournalAdminDashboardController::class, 'journalAdmin'])->name('journalAdmin');
    Route::get('/',[journalAdmin\journalAdminDashboardController::class, 'index'])->name('journalAdmin');
    Route::get('/createUser', [journalAdmin\journalAdminDashboardController::class, 'createUserIndex'])->name('createUserIndex');

    Route::post('/store', [CreateUserController::class, 'store'])->name('createUser.store');
    Route::get('/setRole',[journalAdmin\journalAdminDashboardController::class, 'rolesIndex'])->name('rolesIndex');
    Route::get('/users-with-roles',[journalAdmin\journalAdminDashboardController::class, 'getUsersWithRoles'])->name('getUsers');
    Route::resource('/manageRoles',UserRoleController::class);
});



// Route::resource('/createUser', CreateUserController::class);



Route::get('/reviewer', function () {
    return view('layouts.dashboard.reviewer');
})->middleware(['auth', 'verified', 'role:reviewer'])->name('reviewer');

Route::get('/editor', function () {
    return view('layouts.dashboard.editor');
})->middleware(['auth', 'verified', 'role:editor'])->name('editor');

Route::get('/superAdmin', function () {
    return view('layouts.dashboard.superAdmin');
})->middleware(['auth', 'verified', 'role:superAdmin'])->name('superAdmin');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('/createFaculty', FacultyController::class);

