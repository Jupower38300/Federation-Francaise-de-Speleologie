<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubmissionForm;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'prenom' => 'required',
            'titre' => 'required',
            'site_name' => 'required',
            'activity' => 'required',
            'message' => 'required',
        ]);
    
        SubmissionForm::create([
            'prenom' => $request->input('prenom'),
            'titre' => $request->input('titre'),
            'site_name' => $request->input('site_name'),
            'activity' => $request->input('activity'),
            'message' => $request->input('message'),
        ]);
    
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    public function showFormSubmissions()
        {
            $formSubmissions = SubmissionForm::all();
            return view('moderation', compact('formSubmissions'));
        }   
}
