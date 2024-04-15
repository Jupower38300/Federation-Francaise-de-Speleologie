<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissionForm extends Model
{
    protected $fillable = ['prenom', 'nom', 'message'];
    protected $table = 'form_submissions';

}
