<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/post/create', [PostController::class,'create']);
Route::get('/post/{id}', action: [PostController::class,'show']);
Route::get('/tag/create', [TagController::class,'create']);
Route::get('/tag/delete', [TagController::class,'delete']);




// difference between MVC and restful api
// restful api :  resources
     // controller in this case is called Request Handler because it handles requests and responses
     // maybe the request talk with business layer or service layer which talk with models 
     // N-TIER architecture
// MVC : controllers and views