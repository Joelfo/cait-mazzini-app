<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'city_id'
    ];

   
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
