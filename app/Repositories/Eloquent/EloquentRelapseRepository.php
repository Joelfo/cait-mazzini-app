<?php
namespace App\Repositories\Eloquent;

use App\Models\Relapse;
use App\Repositories\RelapseRepository;

class EloquentRelapseRepository extends EloquentBaseRepository implements RelapseRepository {
    public function __construct()
    {
        parent::__construct(Relapse::class);
    }
}
