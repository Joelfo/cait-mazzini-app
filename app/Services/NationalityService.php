<?php
namespace App\Services;

use App\Repositories\NationalityRepository;

class NationalityService extends BaseService
{
    public function __construct(NationalityRepository $repository){
        $this->setRepository($repository);
    }
}