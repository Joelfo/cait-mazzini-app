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
        return parent::getByBelongsToRelationship('health_unity_id', $healthUnityId);
    }

    public function getByBirthplace(int $cityId){
        return parent::getByBelongsToRelationship('birthplace_id', $cityId);
    }

    public function getByDistrict(int $districtId){
        return parent::getByBelongsToRelationship('district_id', $districtId);
    }
}
