<?php
namespace App\Services;

use App\Repositories\PatientRepository;

class PatientService extends BaseService
{
    public function __construct(PatientRepository $repository)
    {
        $this->setRepository($repository);  
    }

    public function showByHealthUnity(int $healthUnityId){
        return $this->repository->getByHealthUnity($healthUnityId);
    }
}