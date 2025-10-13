<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/contact', [IndexController::class, 'contact']);
Route::get('/job', [JobController::class, 'index']);

Route::get('/post', [PostController::class,'index']);
Route::get('/post/create', [PostController::class,'create']);
Route::get('/post/{id}', [PostController::class,'show']);


Route::get('/tag', [TagController::class,'index']);
Route::get('/tag/create', [TagController::class,'create']);
Route::get('/tag/delete', [TagController::class,'delete']);