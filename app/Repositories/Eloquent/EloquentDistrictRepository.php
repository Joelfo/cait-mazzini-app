<?php
namespace App\Repositories\Eloquent;

use App\Models\District;
use App\Repositories\DistrictRepository;

class EloquentDistrictRepository extends EloquentBaseRepository implements DistrictRepository {
    public function __construct()
    {
        parent::__construct(District::class);
    }

    public function getByCity(int $cityId)
    {
        return $this->getByBelongsToRelationship('city_id', $cityId);
    }
}
