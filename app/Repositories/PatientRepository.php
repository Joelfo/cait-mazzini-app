<?php
namespace App\Repositories;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Collection;

interface PatientRepository{
    
    public function create(Array $data) : Patient;

    public function all() : Array;

    public function delete(Patient $patient) : Patient;

    public function update(Patient $patient, Array $data) : Patient;
}