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

Route::get('/moderation', [FormController::class, 'showFormSubmissions'])->name('form-submissions');

Route::get('/form-submissions/{id}/edit', [FormController::class, 'editFormSubmission'])->name('form.edit');
Route::put('/form-submissions/{id}', [FormController::class, 'updateFormSubmission'])->name('form.update');