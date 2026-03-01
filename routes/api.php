<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;


Route::get('articles/latest', [ArticleController::class, 'get5MostRecentArticlesTechNote']);
Route::apiResource("articles", ArticleController::class);
Route::apiResource('subscriptions', SubscriptionController::class);
Route::apiResource('payments', PaymentController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('tags', TagController::class);


