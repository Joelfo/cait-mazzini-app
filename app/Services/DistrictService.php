<?php
namespace App\Services;

use App\Repositories\DistrictRepository;

class DistrictService extends BaseService
{
    public function __construct(DistrictRepository $repository){
        $this->setRepository($repository);
    }

    public function getModelAttributesFromDTO($dto)
    {
        return [
            'name' => $dto->name,
            'city_id' => $dto->city->id
        ];
    }
}