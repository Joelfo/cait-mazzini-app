<?php
namespace App\Repositories;
use App\Models\HealthUnity;
use Illuminate\Database\Eloquent\Collection;

interface HealthUnityRepository{
    
    public function create(Array $data) : HealthUnity;

    public function all() : Array;

    public function delete(HealthUnity $healthUnity) : HealthUnity;

    public function update(HealthUnity $healthUnity, Array $data) : HealthUnity;
}