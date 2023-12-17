<?php

use App\Http\Controllers\IssueController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Councilor Routes
Route::get('overview',[DashboardController::class,'index'])->middleware('isCouncilor')->name('overview');
Route::get('/issue-list',[IssueController::class,'index'])->middleware('isCouncilor')->name('issue-list');
Route::get('issue-solved',[IssueController::class,'solvedIssues'])->middleware('isCouncilor')->name('issue-solved');
Route::get('issue-rejected',[IssueController::class,'rejectedIssues'])->middleware('isCouncilor')->name('issue-rejected');
Route::get('/{id}/issue-details',[IssueController::class,'issueDetails'])->middleware('isCouncilor')->name('issueDetails');
Route::post('/approve-issue',[IssueController::class,'approveIssue'])->middleware('isCouncilor')->name('approve-issue');
Route::post('/reject-issue',[IssueController::class,'rejectIssue'])->middleware('isCouncilor')->name('reject-issue');
Route::get('/{id}/approved-issue-details',[IssueController::class,'issueDetails'])->middleware('isCouncilor')->name('approved-issue-details');
Route::get('/{id}/rejected-issue-details',[IssueController::class,'issueDetails'])->middleware('isCouncilor')->name('rejected-issue-details');

Route::get('profile',[ProfileController::class, 'index'])->name('profile');

Route::get('/create-issue',[IssueController::class,'create'])->name('create-issue');
Route::post('/submit-issue',[IssueController::class,'store'])->name('submit-issue');


Route::get('/submitted-issue',[IssueController::class,'myIssue'])->name('submitted-issue');

//Report Generation Routes
Route::get('/all-issues',[IssueController::class,'exportAllIssues'])->name('all-issues');

