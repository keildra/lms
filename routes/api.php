<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::resource('leads', LeadController::class);


// Route::get('/leads', [LeadController::class, 'index']);
// Route::get('/leads/create', [LeadController::class, 'create']);
// Route::post('/leads/save', [LeadController::class, 'store']);
// Route::get('/leads/{lead}/update', [LeadController::class, 'update']);
// Route::get('/leads/create', [LeadController::class, 'create']);
// Route::get('/leads/delete', [LeadController::class, 'delete']);

