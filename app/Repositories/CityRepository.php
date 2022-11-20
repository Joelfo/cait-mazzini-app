<?php
namespace App\Repositories;
use App\Models\City;
use Illuminate\Database\Eloquent\Collection;

interface CityRepository{
    
    public function create(Array $data) : City;

    public function all() : Array;

    public function delete(City $City) : City;

    public function update(City $City, Array $data) : City;
}