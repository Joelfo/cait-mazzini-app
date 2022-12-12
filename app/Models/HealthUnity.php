<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;

class HealthUnity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    

    public function patients(){
        return $this->hasMany(Patient::class);
    }

    public function district(){
        return $this->belongsTo(District::class);
    }
}
