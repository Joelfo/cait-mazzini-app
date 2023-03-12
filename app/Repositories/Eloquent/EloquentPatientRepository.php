<?php
namespace App\Repositories\Eloquent;

use App\Models\Patient;
use App\Repositories\PatientRepository;

class EloquentPatientRepository extends EloquentBaseRepository implements PatientRepository {
    //protected $modelClass = Patient::class;

    public function __construct(){
        parent::__construct(Patient::class);
    }

    public function getByHealthUnity(int $healthUnityId){
        return parent::getByRelationship('health_unity_id', $healthUnityId);
    }

    public function getByBirthplace(int $cityId){
        return parent::getByRelationship('birthplace_id', $cityId);
    }

    public function getByDistrict(int $districtId){
        return parent::getByRelationship('district_id', $districtId);
    }
}
