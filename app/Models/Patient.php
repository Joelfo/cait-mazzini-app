<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    
}
