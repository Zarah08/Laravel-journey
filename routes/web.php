<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


use Illuminate\Support\Facades\Route;



Route::get("/",[HomeController::class,"index"])-> name("home");
Route::apiRresource("/products", ProductController::class)->only(["index","show"]); 
    
