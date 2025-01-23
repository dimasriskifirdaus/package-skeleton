<?php

use PackageSkeleton\Http\Controllers\ArticleController;
use PackageSkeleton\Http\Controllers\CommentController;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
    Route::post('/articles/{article}/comments', [CommentController::class, 'store'])->name('comments.store');
});
