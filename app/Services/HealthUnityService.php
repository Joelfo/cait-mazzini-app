<?php
namespace App\Services;

use App\Repositories\HealthUnityRepository;

class HealthUnityService extends BaseService
{
    public function __construct(HealthUnityRepository $repository){
        $this->setRepository($repository);
    }

    public function getModelAttributesFromDTO($dto)
    {
        return [
            'name' => $dto->name,
            'district_id' => $dto->district->id
        ];
    }
}