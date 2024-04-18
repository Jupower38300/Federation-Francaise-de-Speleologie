<?php

namespace App\Http\Controllers;

use App\Models\consultation;
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
        if (Auth::user()->is_admin == 1) {
            $formSubmissions = SubmissionForm::where('is_published', 0)->get();
            return view('moderation', compact('formSubmissions'));
        } else {
            return redirect()->back()->with('error', 'You are not authorized to access this page.');
        }
    }

    public function editFormSubmission($id)
    {
        if (Auth::user()->is_admin == 1) {
            $formSubmission = SubmissionForm::findOrFail($id);
            return view('edit_infos', compact('formSubmission'));
        } else {
            return redirect()->back()->with('error', 'You are not authorized to access this page.');
        }
    }

    public function updateFormSubmission(Request $request, $id)
    {
        if (Auth::user()->is_admin == 1) {
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
    public function publishFormSubmission(Request $request, $id)
{
    $formSubmission = SubmissionForm::findOrFail($id);
    $formSubmission->is_published = 1;
    $formSubmission->save();

    // Refresh the moderation and consultation pages to reflect the change
    return redirect()->route('form-submissions')->with('success', 'Form submission published successfully.');
}

public function showConsultationFormSubmissions()
{
        $publishedFormSubmissions = SubmissionForm::where('is_published', 1)->get();
        return view('consultation', compact('publishedFormSubmissions'));
}

}