<?php
namespace App\Repositories\Eloquent;

use App\Models\HealthUnity;
use App\Repositories\HealthUnityRepository;

class EloquentHealthUnityRepository extends EloquentBaseRepository implements HealthUnityRepository {
    protected $modelClass = HealthUnity::class;
}
