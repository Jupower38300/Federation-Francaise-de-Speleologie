<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubmissionForm;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::user()->is_Admin == 1) {
            $formSubmissions = SubmissionForm::all();
            return view('moderation', compact('formSubmissions'));
        } else {
            return redirect()->back()->with('error', 'You are not authorized to access this page.');
        }
    }

    public function editFormSubmission($id)
    {
        if (Auth::user()->is_Admin == 1) {
            $formSubmission = SubmissionForm::findOrFail($id);
            return view('edit_infos', compact('formSubmission'));
        } else {
            return redirect()->back()->with('error', 'You are not authorized to access this page.');
        }
    }

    public function updateFormSubmission(Request $request, $id)
    {
        if (Auth::user()->is_Admin == 1) {
            $request->validate([
                'prenom' => 'required',
                'titre' => 'required',
                'site_name' => 'required',
                'activity' => 'required',
                'message' => 'required',
            ]);

            $formSubmission = SubmissionForm::findOrFail($id);
            $formSubmission->update([
                'prenom' => $request->input('prenom'),
                'titre' => $request->input('titre'),
                'site_name' => $request->input('site_name'),
                'activity' => $request->input('activity'),
                'message' => $request->input('message'),
            ]);

            return redirect()->route('form-submissions')->with('success', 'Form submission updated successfully!');
        } else {
            return redirect()->back()->with('error', 'You are not authorized to access this page.');
        }
    }
}
