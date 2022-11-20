<?php
namespace App\Repositories;
use App\Models\Relapse;
use Illuminate\Database\Eloquent\Collection;

interface RelapseRepository{
    
    public function create(Array $data) : Relapse;

    public function all() : Array;

    public function delete(Relapse $Relapse) : Relapse;

    public function update(Relapse $Relapse, Array $data) : Relapse;
}