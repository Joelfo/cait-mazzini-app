<?php
namespace App\Services;

use App\Repositories\PatientExamRepository;

class PatientExamService extends BaseService
{
    public function __construct(PatientExamRepository $repository)
    {
        $this->setRepository($repository);  
    }

    public function showByChart(int $chartId){
        return $this->repository->getByChart($chartId);
    }
}