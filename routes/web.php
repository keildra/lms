<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/', function () {
    // return view('welcome');
    return view('assignment');
});
Route::resource('leads', LeadController::class);

