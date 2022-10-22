<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publications extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'titre',
        'description',
        'created_by',
        'modified_by',
        'image',
    ];

}
