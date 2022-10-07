<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formations extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'titre',
        'description',
        'duree',
        'objectives',
        'debouchéés',
        'cibles',
        'prerequis',
        'created_by',
        'modified_by',
        'image',
        'price'
    ];
}
