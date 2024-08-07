<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/palestrante', [EventController::class, 'createPalestrante']);
Route::get('/destaques', [EventController::class, 'destaques']);
Route::get('/palestrantes', [EventController::class, 'palestrantes']);
Route::post('/events', [EventController::class, 'store']);
Route::post('/palestrant', [EventController::class, 'palestrantCreate']);


Route::get('/contact', function () {
    return view('contact');
});