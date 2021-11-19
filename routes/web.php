<?php

use App\Http\Controllers\hashtagAdminController;
use App\Http\Controllers\hashtagUpdateController;
use App\Http\Controllers\listController;
use App\Http\Controllers\newsFormAdminController;
use App\Http\Controllers\newsListController;
use App\Http\Controllers\newsUpdateController;
use App\Http\Controllers\subjectAdminController;
use App\Http\Controllers\newsEventsController;
use App\Http\Controllers\newsPageController;

use App\Http\Controllers\subjectUpdateController;
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

Route::get('/news-events',[newsEventsController::class,'newsEventsViewFunction'])->name('newsEventsViewRoute');
Route::get('/newsPage/{id}',[newsPageController::class,'newsPageViewFunction'])->name('newsPageViewRoute');

//admin rout
Route::get('/hashtagForm',[hashtagAdminController::class,'hashtagFormViewFunction'])->name('hashtagFormViewRoute');
Route::get('/subjectForm',[subjectAdminController::class,'subjectFormViewFunction'])->name('subjectFormViewRoute');
Route::get('/list/subject',[listController::class,'subjectListViewFunction'])->name('subjectlistViewRoute');
Route::get('/list/hashtag',[listController::class,'hashtagListViewFunction'])->name('hashtaglistViewRoute');
Route::get('/newsForm',[newsFormAdminController::class,'newsFormViewFunction'])->name('newsFormViewRoute');
Route::get('/newsList',[newsListController::class,'newsListViewFunction'])->name('newsListViewRoute');

//create rout
Route::post('/hashtagForm',[hashtagAdminController::class,'addHashtagFunction'])->name('addHashtagRoute');
Route::post('/subjectForm',[subjectAdminController::class,'addSubjectFunction'])->name('addSubjectRoute');
Route::post('/newsForm',[newsFormAdminController::class,'addNewsFunction'])->name('addNewsRoute');

//delete rout
Route::get('/subjectForm/{id}',[subjectAdminController::class,'delelteSubjectFunction'])->name('deleteSubjectViewRoute');
Route::get('/newsList/{id}',[newsFormAdminController::class,'deleteNewsFunction'])->name('deleteNewsViewRoute');
Route::get('/hashtagForm/{id}',[hashtagAdminController::class,'deleteHashtagFunction'])->name('deleteHashtagViewRoute');

//update rout
Route::get('/subjectUpdate/{id}',[subjectUpdateController::class,'updateSubjectViewFunction'])->name('updateSubjectViewRoute');
Route::post('/list/Subject',[subjectUpdateController::class,'updateSubject'])->name('subjectUpdateRoute');

Route::get('/newsUpdate/{id}',[newsUpdateController::class,'updateNewsViewFunction'])->name('updateNewsViewRoute');
Route::post('/newsList',[newsUpdateController::class,'updateNews'])->name('newsUpdateRoute');

Route::get('/hashtagUpdate/{id}',[hashtagUpdateController::class,'updateHashtagViewFunction'])->name('updateHashtagViewRoute');
Route::post('/list',[hashtagUpdateController::class,'updateHashtag'])->name('hashtagUpdateRoute');





