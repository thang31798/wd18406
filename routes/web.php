<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// http://127.0.0.1:8000/ base
// GET , POST , PATCH , DELETE ( method http )

Route::get('/',function(){
    echo 'trang chu';
});

Route::get('/test',function(){
    echo 'abc';
});
// Điều hướng qua action của controller
// php artisan make:controller TênController

Route::get('list-product',[ProductController::class,'showProduct']);




// Gửi dữ liệu qua controller 
// slug
// http://127.0.0.1:8000/get-product/55
Route::get('get-product/{id}/{name?}',[ProductController::class,'getProduct']);

// params
// http://127.0.0.1:8000/update-product?id=4&name=iphone
Route::get('update-product',[ProductController::class,'updateProuduct']);