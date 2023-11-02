<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',[UserController::class,'welcome']);
Route::get('/form',[UserController::class,'index']);
Route::get('/submit',[UserController::class,'back']);
Route::post('/',[UserController::class,'store']);
