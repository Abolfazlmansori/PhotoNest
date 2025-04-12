<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gallery\galleryController;
use App\Http\Controllers\Gallery\indexController;


Route::prefix('gallery')->group(function(){
    Route::get('/',indexController::class)->name('gallery');
    Route::get('/pictures/',[galleryController::class,'index'])->name('gallery.pictures');
    Route::get('/pictures/create',[galleryController::class,'create'])->name('gallery.pictures.create');
    Route::post('/store', [galleryController::class,'store'])->name('gallery.store');
    Route::delete('/destroy/{id}', [galleryController::class,'destroy'])->name('gallery.destroy');
});
