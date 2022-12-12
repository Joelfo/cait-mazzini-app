<?php
namespace App\Services;

use App\Repositories\ReleaseRepository;

class ReleaseService extends BaseService
{
    public function construct(ReleaseRepository $repository){
        $this->setRepository($repository);
    }
}