<?php
namespace App\Repositories;
use App\Models\Patient;

interface PatientRepository{
    
    public function add(Patient $patient): Patient;

}