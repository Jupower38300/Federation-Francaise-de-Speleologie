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
            'date' => 'required|date|before:today',
            'commune' => 'required',
            'departement' => 'required',
            'description' => 'required',
            'analyse' => 'required',
            'materiel' => 'required',
            'humain' => 'required',
        ], [
            'required' => 'Ce champ est requis.',
            'date.before' => 'La date doit être dans le passé.',
        ]);

        SubmissionForm::create([
            'prenom' => $request->input('prenom'),
            'titre' => $request->input('titre'),
            'site_name' => $request->input('site_name'),
            'activity' => $request->input('activity'),
            'message' => $request->input('message'),
            'date' => $request->input('date'),
            'commune' => $request->input('commune'),
            'departement' => $request->input('departement'),
            'description' => $request->input('description'),
            'analyse' => $request->input('analyse'),
            'materiel' => $request->input('materiel'),
            'humain' => $request->input('humain'),
        ]);

        return redirect()->back()->with('success', 'Votre retour a été envoyé avec succès!');
    }

    public function showFormSubmissions()
    {
        if (Auth::user()) {
            if (Auth::user()->is_admin == 1) {
                $formSubmissions = SubmissionForm::where('is_published', 0)->get();
                return view('moderation', compact('formSubmissions'));
            } else {
                return redirect()->back()->with('error', 'You are not authorized to access this page.');
            }
        } else {
            return redirect()->route('login')->with('error', 'You are not authorized to access this page.');
        }
    }


    public function editFormSubmission($id)
    {
        if (Auth::user()) {
            if (Auth::user()->is_admin == 1) {
                $formSubmission = SubmissionForm::findOrFail($id);
                return view('edit_infos', compact('formSubmission'));
            } else {
                return redirect()->back()->with('error', 'You are not authorized to access this page.');
            }
        }     
    }

    public function updateFormSubmission(Request $request, $id)
    {
        if (Auth::user()) {
                if (Auth::user()->is_admin == 1) {
                    $request->validate([
                        'prenom' => 'required',
                        'titre' => 'required',
                        'site_name' => 'required',
                        'activity' => 'required',
                        'message' => 'required',
                        'date' => 'required|date',
                        'commune' => 'required',
                        'departement' => 'required',
                        'description' => 'required',
                        'analyse' => 'required',
                        'materiel' => 'required',
                        'humain' => 'required',
                    ]);
            
                    $formSubmission = SubmissionForm::findOrFail($id);
                    $formSubmission->update([
                        'prenom' => $request->input('prenom'),
                        'titre' => $request->input('titre'),
                        'site_name' => $request->input('site_name'),
                        'activity' => $request->input('activity'),
                        'message' => $request->input('message'),
                        'date' => $request->input('date'),
                        'commune' => $request->input('commune'),
                        'departement' => $request->input('departement'),
                        'description' => $request->input('description'),
                        'analyse' => $request->input('analyse'),
                        'materiel' => $request->input('materiel'),
                        'humain' => $request->input('humain'),
                    ]);
            
                    return redirect()->route('form-submissions')->with('success', 'Le retour a été modifié avec succès!');
                } else {
                    return redirect()->back()->with('error', 'You are not authorized to access this page.');
                }
            }
        }
    public function publishFormSubmission($id)
{
    if (Auth::user()) {
        if (Auth::user()->is_admin == 1) {
            $formSubmission = SubmissionForm::findOrFail($id);
            $formSubmission->is_published = 1;
            $formSubmission->save();

            // Refresh the moderation and consultation pages to reflect the change
            return redirect()->route('form-submissions')->with('success', 'Le retour a été publié avec succès.');
        }
    }
}

public function showConsultationFormSubmissions()
{
        $publishedFormSubmissions = SubmissionForm::where('is_published', 1)->get();
        return view('consultation', compact('publishedFormSubmissions'));
}

public function showConsultationDetails($id)
{
    $formSubmission = SubmissionForm::findOrFail($id);

    if ($formSubmission->is_published == 1) {
        return view('consultation_details', compact('formSubmission'));
    } else {
        return redirect()->back()->with('error', "Cette consultation n'est pas encore publiée.");
    }
}
}