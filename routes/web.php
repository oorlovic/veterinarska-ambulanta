<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PregledController;

Route::get('/', function(){ return view('welcome'); });

Route::middleware(['auth'])->group(function(){
    Route::get('/pregledi', [PregledController::class,'index'])->name('pregledi.index');
    Route::post('/pregledi', [PregledController::class,'store'])->name('pregledi.store');
});

Route::middleware(['auth','uloga:admin'])->group(function(){
    Route::get('/admin', [AdminController::class,'index'])->name('admin.index');
    Route::get('/admin/pdf', [AdminController::class,'pdf'])->name('admin.pdf');
});

require __DIR__.'/auth.php';   
