<?php
namespace App\Repositories;
use App\Models\Release;
use Illuminate\Database\Eloquent\Collection;

interface ReleaseRepository{
    
    public function create(Array $data) : Release;

    public function all() : Array;

    public function delete(Release $Release) : Release;

    public function update(Release $Release, Array $data) : Release;
}