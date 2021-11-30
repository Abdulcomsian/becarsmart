<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyCarLead extends Model
{
    use HasFactory;
    protected $casts = [
        'questions' => 'array',
        'answers' => 'array',
    ];
}
