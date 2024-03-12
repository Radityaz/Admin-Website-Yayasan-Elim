<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\DraftController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DraftEditController;
use App\Http\Controllers\ArticleEditController;
use App\Http\Controllers\DraftDetailController;
use App\Http\Controllers\TrashDetailController;
use App\Http\Controllers\ArticleDetailController;

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
    return view('index');
});

Route::get('/createacc', function () {
    return view('createacc');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('userpass');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/signin', [LoginController::class, 'create']);





Route::middleware('auth')->group(function () {
    Route::get('/article', [ArticleController::class, 'index']);
    Route::get('/article/search', [ArticleController::class, 'search']);
    Route::get('/article/{id}', [ArticleDetailController::class, 'index']);
    
    
    Route::get('/draft', [DraftController::class, 'index']);
    Route::get('/draft/search', [DraftController::class, 'search']);
    Route::get('/draft/{id}', [DraftDetailController::class, 'index']);
    Route::get('/draftedit/{id}', [DraftEditController::class, 'index']);
    Route::post('/draftedit/update/{id}', [DraftEditController::class, 'update']);
    
    
    Route::post('/trash/{id}', [TrashController::class, 'trash']);
    Route::get('/trash', [TrashController::class, 'index']);
    Route::get('/trash/search', [TrashController::class, 'search']);
    Route::get('/trashdetail/{id}', [TrashDetailController::class, 'index']);
    Route::post('/trash/restore/{id}', [TrashController::class, 'restore']);
    Route::post('/delete/{id}', [TrashController::class, 'delete']);
    
    
    
    
    Route::get('/add', function () {
        return view('add');
    });
    
    Route::post('/add/post', [AddController::class, 'add']);
    
    Route::get('/edit/{id}', [ArticleEditController::class, 'index']);
    Route::post('/edit/update/{id}', [ArticleEditController::class, 'update']);
});









