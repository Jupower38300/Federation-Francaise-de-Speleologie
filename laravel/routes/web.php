<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulaire', function () {
    return view('formulaire');
})->name('formulaire');

Route::post('/formulaire', [FormController::class, 'store'])->name('form.store');

Route::get('/moderation', [FormController::class, 'showFormSubmissions'])->name('form-submissions');
Route::get('/consultation', [FormController::class, 'showConsultationFormSubmissions'])->name('consultation');

Route::get('/form-submissions/{id}/edit', [FormController::class, 'editFormSubmission'])->name('form.edit');
Route::put('/form-submissions/{id}', [FormController::class, 'updateFormSubmission'])->name('form.update');

Route::post('/form-submissions/{id}/publish', [FormController::class, 'publishFormSubmission'])->name('form.publish');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
