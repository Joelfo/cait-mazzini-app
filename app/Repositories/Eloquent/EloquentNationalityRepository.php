<?php
namespace App\Repositories\Eloquent;

use App\Models\Nationality;
use App\Repositories\NationalityRepository;

class EloquentNationalityRepository extends EloquentBaseRepository implements NationalityRepository {
    public function __construct()
    {
        parent::__construct(Nationality::class);
    }
}
