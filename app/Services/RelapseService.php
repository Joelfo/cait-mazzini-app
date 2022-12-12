<?php
namespace App\Services;

use App\Repositories\RelapseRepository;

class RelapseService extends BaseService
{
    public function construct(RelapseRepository $repository){
        $this->setRepository($repository);
    }
}