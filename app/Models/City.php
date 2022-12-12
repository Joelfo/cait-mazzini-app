<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    protected $with = ['districts'];
    
    public function districts(){
        return $this->hasMany(District::class);
    }
}
