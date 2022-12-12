<?php
namespace App\Repositories\Eloquent;

use App\Models\City;
use App\Repositories\CityRepository;

class EloquentCityRepository extends EloquentBaseRepository implements CityRepository {
    protected $modelClass = City::class;
}
