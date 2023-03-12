<?php
namespace App\Repositories;

interface PatientRepository extends BaseRepository{
    public function getByHealthUnity(int $healthUnityId);
    
    public function getByBirthplace(int $birthplaceId);

    public function getByDistrict(int $districtId);
}