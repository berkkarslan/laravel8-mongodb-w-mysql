<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BrandController;


Route::get('add',[Controller::class,'create']);
Route::post('add',[Controller::class,'store']);
Route::get('car',[Controller::class,'index']);
Route::get('edit/{id}',[Controller::class,'edit']);
Route::post('edit/{id}',[Controller::class,'update']);
Route::delete('delete/{id}',[Controller::class,'destroy']);


Route::get('brand/add',[BrandController::class,'create']);
Route::post('brand/add',[BrandController::class,'store']);
Route::get('brand',[BrandController::class,'index']);
Route::get('brand/edit/{id}',[BrandController::class,'edit']);
Route::post('brand/edit/{id}',[BrandController::class,'update']);
Route::delete('brand/delete/{id}',[BrandController::class,'destroy']);
