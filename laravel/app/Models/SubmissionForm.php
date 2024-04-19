<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class SubmissionForm extends Model
{
    protected $fillable = [
        'prenom',
        'titre',
        'activity',
        'site_name',
        'message',
        'date',
        'commune',
        'departement',
        'description',
        'analyse',
        'materiel',
        'humain',
    ];
    protected $table = 'experiences';

    
    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
}