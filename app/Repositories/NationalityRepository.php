<?php
namespace App\Repositories;
use App\Models\Nationality;
use Illuminate\Database\Eloquent\Collection;

interface NationalityRepository{
    
    public function create(Array $data) : Nationality;

    public function all() : Array;

    public function delete(Nationality $Nationality) : Nationality;

    public function update(Nationality $Nationality, Array $data) : Nationality;
}