<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    use HasFactory;
    protected $fillable = [
        'plusSixMonths', 
        'reason', 
        'additionalInfo'
    ];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
