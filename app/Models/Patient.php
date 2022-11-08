<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HealthUnity;
use App\Models\Nationality;
use Illuminate\Database\Eloquent\Builder;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'sus_card', 
        'rg', 
        'cpf', 
        'admission_date', 
        'type', 
        'arrive', 
        'telephone_1', 
        'telephone_2', 
        'cep', 
        'pregnant', 
        'birth_date', 
        'record_code', 
        'mother_name', 
        'address' 
    ];
    
    public function healthUnity(){
        return $this->belongsTo(HealthUnity::class);
    }

    public function Nationality(){
        return $this->belongsTo(Nationality::class);
    }

    protected static function booted(){
        self::addGlobalScope('alphabeticOrdered', function(Builder $queryBuilder){
            $queryBuilder->orderBy('name');
        });
    }
}
