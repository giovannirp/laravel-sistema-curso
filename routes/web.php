<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/destaques', [EventController::class, 'destaques']);
Route::get('/palestrantes', [EventController::class, 'palestrantes']);


Route::get('/contact', function () {
    return view('contact');
});