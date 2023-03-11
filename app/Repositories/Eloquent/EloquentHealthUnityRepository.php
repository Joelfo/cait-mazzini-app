<?php
namespace App\Repositories\Eloquent;

use App\Models\HealthUnity;
use App\Repositories\HealthUnityRepository;

class EloquentHealthUnityRepository extends EloquentBaseRepository implements HealthUnityRepository {
    public function __construct()
    {
        parent::__construct(HealthUnity::class);
    }
}
