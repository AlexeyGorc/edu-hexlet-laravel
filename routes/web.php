<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{PageController, ArticleController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [PageController::class, 'about']);
Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');