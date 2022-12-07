<?php
namespace App\Repositories\Eloquent;

use App\Models\Nationality;
use App\Repositories\NationalityRepository;

class EloquentNationalityRepository extends EloquentBaseRepository implements NationalityRepository {
    protected $modelClass = Nationality::class;
}
