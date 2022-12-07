<?php
namespace App\Repositories\Eloquent;

use App\Models\District;
use App\Repositories\DistrictRepository;

class EloquentDistrictRepository extends EloquentBaseRepository implements DistrictRepository {
    protected $modelClass = District::class;
}
