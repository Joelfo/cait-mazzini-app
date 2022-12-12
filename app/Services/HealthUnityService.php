<?php
namespace App\Services;

use App\Repositories\HealthUnityRepository;

class HealthUnityService extends BaseService
{
    public function construct(HealthUnityRepository $repository){
        $this->setRepository($repository);
    }
}