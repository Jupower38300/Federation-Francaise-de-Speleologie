<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/retour_dexperience', function () {
    return view('formulaire');
})->name('formulaire');

Route::post('/retour_dexperience', [FormController::class, 'store'])->name('form.store');

Route::get('/moderation', [FormController::class, 'showFormSubmissions'])->name('form-submissions');
Route::get('/consultation', [FormController::class, 'showConsultationFormSubmissions'])->name('consultation');

Route::get('/moderation/{id}/edit', [FormController::class, 'editFormSubmission'])->name('form.edit');
Route::put('/moderation/{id}', [FormController::class, 'updateFormSubmission'])->name('form.update');

Route::post('/moderation/{id}/publish', [FormController::class, 'publishFormSubmission'])->name('form.publish');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

