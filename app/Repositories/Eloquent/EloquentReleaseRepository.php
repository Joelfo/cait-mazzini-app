<?php
namespace App\Repositories\Eloquent;

use App\Models\Release;
use App\Repositories\ReleaseRepository;

class EloquentReleaseRepository extends EloquentBaseRepository implements ReleaseRepository {
    public function __construct()
    {
        parent::__construct(Release::class);
    }
}
