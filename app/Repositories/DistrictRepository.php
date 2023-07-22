<?php
namespace App\Repositories;

interface DistrictRepository extends BaseRepository {
    function getByCity(int $cityId);
}
