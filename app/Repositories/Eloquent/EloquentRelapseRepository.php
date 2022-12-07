<?php
namespace App\Repositories\Eloquent;

use App\Models\Relapse;
use App\Repositories\RelapseRepository;

class EloquentRelapseRepository extends EloquentBaseRepository implements RelapseRepository {
    protected $modelClass = Relapse::class;
}
