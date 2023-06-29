<?php
namespace App\Services;

use App\Models\HealthUnity;
use App\Models\Patient;
use App\Repositories\CityRepository;
use App\Repositories\DistrictRepository;
use App\Repositories\HealthUnityRepository;
use App\Repositories\NationalityRepository;
use App\Repositories\PatientRepository;
use Monolog\Handler\NullHandler;

class PatientService extends BaseService
{

    public function __construct(
        PatientRepository $repository,
        public DistrictRepository $districtRepository,
        public CityRepository $cityRepository,
        public NationalityRepository $nationalityRepository,
        public HealthUnityRepository $healthUnityRepository
    )
    {
        $this->setRepository($repository);  
    }



    public function showByHealthUnity(int $healthUnityId){
        return $this->repository->getByHealthUnity($healthUnityId);
    }

    

    public function getModelAttributesFromDTO($dto)
    {
        $attributes = [
            'name' => $dto->name,
            'sus_card' => $dto->susCard,
            'rg' => $dto->rg,
            'cpf' => $dto->cpf,
            'admission_date' => $dto->admissionDate,
            'record_code' => $dto->recordCode,
            'type' => $dto->type,
            'arrival' => $dto->arrival,
            'telephone_1' => $dto->telephone1,
            'telephone_2' => $dto->telephone2,
            'cep' => $dto->cep,
            'is_pregnant' => $dto->isPregnant,
            'birth_date' => $dto->birthDate,
            'mother_name' => $dto->motherName,
            'street' => $dto->street,
            'number' => $dto->number,
            'complement' => $dto->complement,
            'district_id' => $dto->district->id, 
            'birthplace_id' => $dto->birthplace->id,
            'nationality_id' => $dto->nationality->id,
            'special_population' => $dto->specialPopulation,
            'other_special_population' => $dto->otherSpecialPopulation,
            'biological_gender' => $dto->biologicalGender
        ];
        if ($dto->healthUnity != null){
            $attributes['health_unity_id'] = $dto->healthUnity->id;
        }
        return $attributes;
    }
}