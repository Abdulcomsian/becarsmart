<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellCarLead extends Model
{

    use HasFactory;
    protected $guarded = [];


    public function sellcarimages()
    {
        return $this->hasMany(SellCarLeadImages::class);
    }
}
