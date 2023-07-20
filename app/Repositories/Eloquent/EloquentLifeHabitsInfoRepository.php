<?php
namespace App\Repositories\Eloquent;

use App\Models\LifeHabitsInfo;
use App\Repositories\LifeHabitsInfoRepository;

class EloquentLifeHabitsInfoRepository extends EloquentBaseRepository implements LifeHabitsInfoRepository {
    public function __construct()
    {
        parent::__construct(LifeHabitsInfo::class);
    }
}
