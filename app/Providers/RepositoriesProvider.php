<?php

namespace App\Providers;

use App\Repositories\CityRepository;
use App\Repositories\DistrictRepository;
use App\Repositories\Eloquent\EloquentCityRepository;
use App\Repositories\Eloquent\EloquentDistrictRepository;
use App\Repositories\Eloquent\EloquentHealthUnityRepository;
use App\Repositories\Eloquent\EloquentNationalityRepository;
use App\Repositories\Eloquent\EloquentPatientRepository;
use App\Repositories\Eloquent\EloquentRelapseRepository;
use App\Repositories\Eloquent\EloquentReleaseRepository;
use App\Repositories\HealthUnityRepository;
use App\Repositories\NationalityRepository;
use App\Repositories\PatientRepository;
use App\Repositories\RelapseRepository;
use App\Repositories\ReleaseRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    public $bindings = [
        PatientRepository::class => EloquentPatientRepository::class,
        HealthUnityRepository::class => EloquentHealthUnityRepository::class,
        DistrictRepository::class => EloquentDistrictRepository::class,
        CityRepository::class => EloquentCityRepository::class,
        ReleaseRepository::class => EloquentReleaseRepository::class,
        RelapseRepository::class => EloquentRelapseRepository::class,
        NationalityRepository::class => EloquentNationalityRepository::class
        ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
