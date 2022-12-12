<?php
namespace App\Services;

use App\Repositories\CityRepository;

class CityService extends BaseService
{
    public function construct(CityRepository $repository){
        $this->setRepository($repository);
    }
}