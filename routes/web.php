<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('layout');
});

Route::resource('leads', LeadController::class);
Route::resource('contacts', ContactController::class);
Route::post('/leads/{id}/convert', [LeadController::class, 'convert'])->name('leads.convert');
