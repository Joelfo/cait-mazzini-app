<?php
namespace App\Services;

use App\Repositories\DistrictRepository;

class DistrictService extends BaseService
{
    public function construct(DistrictRepository $repository){
        $this->setRepository($repository);
    }
}