<?php
namespace App\Repositories;
use App\Models\District;
use Illuminate\Database\Eloquent\Collection;

interface DistrictRepository{
    
    public function create(Array $data) : District;

    public function all() : Array;

    public function delete(District $District) : District;

    public function update(District $District, Array $data) : District;
}