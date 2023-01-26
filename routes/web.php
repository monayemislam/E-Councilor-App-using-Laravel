<?php

use App\Http\Controllers\IssueController;
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
Route::get('/issue-list',[IssueController::class,'index'])->middleware('isCouncilor')->name('issue-list');

Route::get('/create-issue',[IssueController::class,'create'])->name('create-issue');
Route::post('/submit-issue',[IssueController::class,'store'])->name('submit-issue');

Route::get('/submitted-issue',[IssueController::class,'myIssue'])->name('submitted-issue');

//Report Generation Routes
Route::get('/all-issues',[IssueController::class,'exportAllIssues'])->name('all-issues');

