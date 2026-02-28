<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('articles/latest', [ArticleController::class, 'get5MostRecentArticlesTechNote']);
Route::apiResource("articles", ArticleController::class);

