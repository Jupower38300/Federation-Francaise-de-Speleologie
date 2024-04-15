<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulaire', function () {
    return view('formulaire');
})->name('formulaire');

Route::post('/formulaire', [FormController::class, 'store'])->name('form.store');
