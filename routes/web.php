<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Generalcontroller;

Route::get('/',[Generalcontroller::class,'homepage'])->name('homepage');

Route::get('/add_food',[Generalcontroller::class,'add_food'])->name('add_food');

Route::post('/store_food',[Generalcontroller::class,'store_food'])->name('store_food');

Route::get('/show_food',[Generalcontroller::class,'show_food'])->name('show_food');

Route::get('/add_hotel',[Generalcontroller::class,'add_hotel'])->name('add_hotel');

Route::post('/store_hotel',[Generalcontroller::class,'store_hotel'])->name('store_hotel');

Route::get('/show_hotel',[Generalcontroller::class,'show_hotel'])->name('show_hotel');

Route::get('/search_hotel',[Generalcontroller::class,'search_hotel'])->name('search_hotel');

Route::get('/search_food',[Generalcontroller::class,'search_food'])->name('search_food');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
