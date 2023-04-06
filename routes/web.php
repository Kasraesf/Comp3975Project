<?php

use App\Http\Controllers\NewslettersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});


// ADMIN ROUTES

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ADMIN ROUTES
Route::group(['middleware'=>'auth'], function () {
    Route::get('newsletters', [NewslettersController::class, 'index'])->name('newsletters.index');
    Route::get('newsletters/create', [NewslettersController::class, 'create'])->name('newsletters.create');
    Route::post('newsletters/store', [NewslettersController::class, 'store'])->name('newsletters.store');
    // Route::get('newsletters/show/{id}', [NewslettersController::class, 'show'])->name('newsletters.show');
    Route::get('newsletters/edit/{id}', [NewslettersController::class, 'edit'])->name('newsletters.edit');
    Route::put('newsletters/update', [NewslettersController::class, 'update'])->name('newsletters.update');
    Route::get('newsletters/destroy/{id}', [NewslettersController::class, 'destroy'])->name('newsletters.destroy');
    Route::get('articles', [ArticlesController::class, 'index'])->name('articles.index');
    Route::get('articles/{id}', [ArticlesController::class, 'index'])->name('articles.indices');
    Route::get('articles/create/{id}', [ArticlesController::class, 'create'])->name('articles.create');
    Route::post('articles/store', [ArticlesController::class, 'store'])->name('articles.store');
    Route::get('newsletters/show/{id}', [ArticlesController::class, 'show'])->name('newsletters.show');
    Route::get('articles/destroy/{id}', [ArticlesController::class, 'destroy'])->name('articles.destroy');
    Route::put('articles/update', [ArticlesController::class, 'update'])->name('articles.update');
    Route::get('articles/edit/{id}', [ArticlesController::class, 'edit'])->name('articles.edit');
    Route::get('/search', [ArticlesController::class, 'search'])->name('search');
});