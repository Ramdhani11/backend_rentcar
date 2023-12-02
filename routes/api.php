<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\UserController;

Route::get('/cars',[CarController::class,'index']);
Route::get('/cars/{id}',[CarController::class,'showById']);
Route::post('/cars',[CarController::class,'add']);

Route::get('/rents',[RentController::class,'index']);
Route::get('/rents/{id}',[RentController::class,'showById']);

Route::post('/register',[UserController::class,'add']);