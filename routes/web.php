<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CommentController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/contact', [IndexController::class, 'contact']);
Route::get('/job', [JobController::class, 'index']);

Route::resource('blog', PostController::class);

Route::get('/comments', [CommentController::class, 'index']);
Route::post('comments', [CommentController::class, 'create']);

Route::resource('tags', TagController::class);