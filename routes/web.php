<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'product'], function(){
    Route::get('/', [ProductController::class, 'index']);
    Route::post('/create', [ProductController::class, 'store']);
    Route::get('/edit/{product}', [ProductController::class, 'show']);
    Route::put('/update/{product}', [ProductController::class, 'update']);
    Route::delete('/delete/{product}', [ProductController::class, 'destroy']);
});


Route::get('/test', function(){
    echo "Learning Pest Laravel Testing";
});


Route::get('testing-font', [ProductController::class, 'testingFont']);


Route::get('/another-test', function(){
    echo "Another Test Route";
});