<?php

// use App\Http\Controllers\Admin\AdminDashboardController;

use App\Http\Controllers\article\articleSubmissionController;
use App\Http\Controllers\author\authorDashboardController;
use App\Http\Controllers\editor\EditorController;
use App\Http\Controllers\journalAdmin\JournalController;
use App\Http\Controllers\JournalAdmin\PermissionController;
use App\Http\Controllers\JournalAdmin\RoleController;
use App\Http\Controllers\MyArticlesController;
use App\Http\Controllers\article\postArticleSubmissionController;
use App\Http\Controllers\reviewer\ReviewerController;
use App\Http\Controllers\superAdmin\FacultyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\superAdmin\SuperAdminDashboardController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserAndRoleManagement\UserRoleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\GoogleRegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\journalAdmin\ArticleController;
use App\Http\Controllers\UserAndRoleManagement\CreateUserController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\journalAdmin\journalAdminDashboardController;
use App\Http\Controllers\PublishedJournalController;

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
})->name('home');

Route::get('/contact', function () {
    return view('layouts.contacts');
})->name('contact');

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
})->name('privacyPolicy');

Route::get('/ui', function(){
    return view('layouts.headerModified');
});

Route::get('/submit', function(){
    return view('layouts.dashboard.author.submitArticle');
});


// Route::get('articleDescription', [JournalController::class, 'articleDescription'])->name('articleDescription');
Route::get('/atozJournals',[JournalController::class, 'atozjournals'])->name('atozjournals');
// Route::get('/aims&scope', [JournalController::class, 'aims&scope'])->name('aims&scope');

Route::get('/journal/{id}', [JournalController::class, 'individualJournal'])->name('individualJournal');

Route::get('/aims&scope', function(){
    return view('layouts.guests.aims&scopeofAvailableJournal');
});

// Route::get('/articleDescription', function(){
//     return view('layouts.guests.viewPublishedArticleDescription');
// });



// Route::get('sendNotification',[NotificationController::class,"sendNotification"]);

Route::get('/dashboard', function () {
    return view('layouts.dashboard.main');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified', 'role:superAdmin'])->prefix('superAdmin')->group(function(){
    Route::get('/', [SuperAdminDashboardController::class, 'index'])->name('superAdminIndex');
    Route::get('/facultyPage', [SuperAdminDashboardController::class, 'getFacultyPage'])->name('facultyPage');
    Route::get('/faculty', [FacultyController::class, 'index'])->name('getFacultyList');
    Route::post('/facultys', [FacultyController::class, 'store'])->name('storeFaculty');
    Route::put('/faculty/{id}', [FacultyController::class, 'update'])->name('updateFaculty');
    Route::delete('/faculty/{id}', [FacultyController::class, 'destroy'])->name('updateFaculty');
    Route::get('/assignJournalAdmin', [SuperAdminDashboardController::class, 'getAssignJournalAdminPage'])->name('assignJournalAdminPage');
    Route::post('/assignJournalAdmin/{journalAdmin}', [SuperAdminDashboardController::class, 'addJournalAdminToFaculty'])->name('addJournalAdminToFaculty');
    Route::delete('assignJournalAdmin/{journalAdmin}/{faculty}', [SuperAdminDashboardController::class, 'removeJournalAdminFromFaculty'])->name('removeJournalAdminFromFaculty');
});

// JOURNAL ADMIN ROLE

Route::middleware(['auth', 'verified', 'role:journalAdmin'])->prefix('journalAdmin')->group(function(){
    // Route::get('/',[JournalAdminDashboardController::class, 'journalAdmin'])->name('journalAdmin');
    Route::get('/',[journalAdminDashboardController::class, 'index'])->name('journalAdmin');
    Route::get('/createUser', [journalAdminDashboardController::class, 'createUserIndex'])->name('createUserIndex');

    Route::post('/store', [CreateUserController::class, 'store'])->name('createUser.store');
    Route::get('/setRole',[journalAdminDashboardController::class, 'rolesIndex'])->name('rolesIndex');
    Route::get('/users-with-roles',[journalAdminDashboardController::class, 'getUsersWithRoles'])->name('getUsers');
    Route::resource('/userRoles',UserRoleController::class);
    Route::put('userRole/{id}', [UserRoleController::class, 'update']);
    Route::get('/createJournal', [JournalAdminDashboardController::class, 'getCreateJournalPage'])->name('createJournalPage');
    Route::post('/storeJournal', [JournalController::class, 'store'])->name('storeJournal');
    Route::get('/allJournals', [JournalController::class, 'getAllJournals'])->name('getAllJournals');
    Route::get('/getEditors', [JournalController::class, 'getEditors'])->name('getEditors');
    Route::get('/edit/{journal}',[JournalController::class, 'edit'])->name('journalEdit');
    Route::put('/edit/{id}',[JournalController::class, 'update'])->name('journalUpdate');

    Route::get('/submittedArticles', [journalAdminDashboardController::class, 'viewSubmittedArticles'])->name('viewSubmittedArticles');
    Route::get('/viewCompletedArticles', [ArticleController::class, 'viewCompletedArticles'])->name('viewCompletedArticles');

    Route::get('/submittedArticles/{article}', [postArticleSubmissionController::class, 'viewArticle'])->name('viewArticle');
    Route::post('/sendArticleToEditor', [ArticleController::class, 'sendArticleToEditor'])->name('sendArticleToEditor');

    Route::get('/submitPublishedArticle/{article}',[journalAdminDashboardController::class, 'submitPublishedArticle'])->name('submitPublishedArticle');
    Route::post('/submitPublishedArticle',[ArticleController::class, 'storePublishedArticle'])->name('storePublishedArticle');

    // Route::get('/submitPublishedArticle',[journalAdminDashboardController::class, 'submitPublishedArticle'])->name('submitPublishedArticle');


    Route::get('/addPublishedJournal',[journalAdminDashboardController::class, 'addPublishedJournalPage'])->name('addPublishedJournalTable');

    Route::get('/addPublishedJournal/submit/{journal_id}',[journalAdminDashboardController::class, 'submitPublishedJournal'])->name('submitPublishedJournal');
    Route::post('/storePublishedJournal', [PublishedJournalController::class, 'store'])->name('storePublishedJournal');

    Route::get('/journalVolume', [JournalController::class, 'getJournalsForView'])->name('createJournalVolumeView');
    Route::get('/journalVolume/create/{id}', [JournalController::class, 'createJournalVolume'])->name('createJournalVolumeForm');
    Route::post('/storeVolume', [JournalController::class, 'storeVolume'])->name('storeVolume');

    Route::get('/journalVolume/issue/create/{id}', [JournalController::class, 'createJournalVolumeIssue'])->name('createJournalVolumeIssueForm');
    Route::post('/storeIssue', [JournalController::class, 'storeIssue'])->name('storeIssue');

    Route::get('sendReviewRequest', [journalAdminDashboardController::class, 'sendReviewRequestView'])->name('sendReviewRequestView');
    Route::get('sendReviewRequest/{article}', [journalAdminDashboardController::class, 'sendReviewRequest'])->name('sendReviewRequest');

    Route::post('/sendReviewRequest', [journalAdminDashboardController::class, 'sendReviewRequestPost'])->name('sendReviewRequestPost');
});
// EDITOR
Route::middleware(['auth', 'verified', 'role:editor'])->prefix('editor')->group(function(){
    Route::get('/submittedArticles', [EditorController::class, 'viewSubmittedArticles'])->name('viewSubmittedArticles.editor');
    Route::get('/submittedArticle/{article}' ,[EditorController::class, 'getArticle'])->name('getArticleEditor');

    Route::get('/searchReviewer', [EditorController::class, 'searchReviewer'])->name('searchReviewers');

    Route::post('/sendReviewersToJournalAdmin', [EditorController::class, 'sendReviewersToJournalAdmin'])->name('sendReviewersToJournalAdmin');
    Route::get('/viewArticlesForFeedback', [EditorController::class, 'viewArticlesForFeedback'])->name('viewArticlesForFeedback');
    Route::get('/viewRevisedArticles/{article}', [EditorController::class, 'viewRevisedArticlesEditor'])->name('viewRevisedArticlesEditor');
    Route::get('/submitFeedback/{r_article}', [EditorController::class, 'getRevisedArticle'])->name('getRevisedArticle');
    Route::post('/submitFeedback', [EditorController::class, 'submitFeedback'])->name('submitFeedbackPost');

});

Route::middleware(['auth', 'verified', 'role:author'])->prefix('author')->group(function(){
    Route::get('/',[authorDashboardController::class, 'index'])->name('author');
    Route::get('/submitArticle/{journal_id}',[articleSubmissionController::class, 'create'])->name('submitArticle');
    Route::post('/submitArticle', [articleSubmissionController::class, 'store'])->name('submitArticle.store');
    Route::get('/myArticles', [authorDashboardController::class, 'myArticles'])->name('myarticles');
    Route::get('/myArticles/{article}', [authorDashboardController::class, 'mySubmittedArticle'])->name('mySubmittedArticle');
    Route::post('/submitRevision', [authorDashboardController::class, 'submitRevision'])->name('submitRevision');
    Route::get('/myArticles/{r_article}/feedback', [authorDashboardController::class, 'myarticlefeedback'])->name('myarticlefeedback');
    Route::get('/finalCopyForm/{article}', [authorDashboardController::class, 'finalCopyForm'] )->name('finalCopyForm');
    Route::post('/submitFinalCopy', [authorDashboardController::class, 'submitFinalCopy'])->name('submitFinalCopy');
    
});

Route::middleware(['auth', 'verified', 'role:reviewer'])->prefix('reviewer')->group(function(){
    Route::get('/viewReviewRequests', [ReviewerController::class, 'viewReviewRequests'])->name('viewReviewRequests');
    Route::get('/viewReviewRequest/{article}', [ReviewerController::class, 'viewReviewRequestSingle'])->name('viewReviewRequestSingle');
    Route::post('/declineRequest', [ReviewerController::class, 'declineRequest'])->name('declineRequest');
    Route::post('/acceptRequest', [ReviewerController::class, 'acceptRequest'])->name('acceptRequest');
    Route::get('/viewArticles', [ReviewerController::class, 'viewArticles'])->name('viewArticlesReviewer');
    Route::get('/viewArticles/{article}', [ReviewerController::class, 'viewRevisedArticles'])->name('viewRevisedArticlesReviewer');
    Route::get('/submitReview/{r_article}', [ReviewerController::class, 'getRevisedArticle'])->name('submitReview');
    Route::post('/submitReview', [ReviewerController::class, 'submitReview'])->name('submitReviewPost');    
});


Route::middleware(['auth','verified'])->group( function () {
    // Route::get('/test',[TestController::class,'test'])->name('test');
    Route::get('/test', [TestController::class, 'index'])->name('searchTest');
    Route::post('/selected', [TestController::class, 'selected'])->name('selectedTest');
    Route::get('/tsearch', [TestController::class, 'search'])->name('TestSearch');
    Route::get('/test_article_download/{id}', [TestController::class, 'download'])->name('test_article_download');
});


Route::get('/reviewer', function () {
    return view('layouts.dashboard.reviewer');
})->middleware(['auth', 'verified', 'role:reviewer'])->name('reviewer');

Route::get('/editor', function () {
    return view('layouts.dashboard.editor');
})->middleware(['auth', 'verified', 'role:editor'])->name('editor');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/availableJournals', [articleSubmissionController::class, 'index']);

require __DIR__.'/auth.php';

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('/createFaculty', FacultyController::class);

