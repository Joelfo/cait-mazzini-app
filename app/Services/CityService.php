<?php
namespace App\Services;

use App\Repositories\CityRepository;

class CityService extends BaseService
{
    public function __construct(CityRepository $repository){
        $this->setRepository($repository);
    }

    public function getModelAttributesFromDTO($dto)
    {
        return [
            'name' => $dto->name
        ];
    }
}
