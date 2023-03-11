<?php
namespace App\Services;

use App\Repositories\HealthUnityRepository;

class HealthUnityService extends BaseService
{
    public function __construct(HealthUnityRepository $repository){
        $this->setRepository($repository);
    }
}