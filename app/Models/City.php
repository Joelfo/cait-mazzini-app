<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name'
    ];
    
    public function districts(){
        return $this->hasMany(District::class);
    }

    public function patients(){
        return $this->hasManyThrough(Patient::class, District::class);
    }
}
