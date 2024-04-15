<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubmissionForm;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'message' => 'required',
        ]);
    
        SubmissionForm::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'message' => $request->input('message'),
        ]);
    
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

}
