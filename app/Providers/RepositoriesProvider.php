<?php

namespace App\Providers;

use App\Models\TrackingAppointmentChart;
use App\Models\VitalSignsMeasurement;
use App\Repositories\AppointmentRepository;
use App\Repositories\BaseRepository;
use App\Repositories\CityRepository;
use App\Repositories\DistrictRepository;
use App\Repositories\Eloquent\EloquentAppointmentRepository;
use App\Repositories\Eloquent\EloquentBaseRepository;
use App\Repositories\Eloquent\EloquentCityRepository;
use App\Repositories\Eloquent\EloquentDistrictRepository;
use App\Repositories\Eloquent\EloquentHealthUnityRepository;
use App\Repositories\Eloquent\EloquentNationalityRepository;
use App\Repositories\Eloquent\EloquentPatientExamRepository;
use App\Repositories\Eloquent\EloquentPatientRepository;
use App\Repositories\Eloquent\EloquentRelapseRepository;
use App\Repositories\Eloquent\EloquentReleaseRepository;
use App\Repositories\Eloquent\EloquentTbAppointmentRepository;
use App\Repositories\Eloquent\EloquentTrackingAppointmentChartRepository;
use App\Repositories\Eloquent\EloquentVitalSignsMeasurementRepository;
use App\Repositories\HealthUnityRepository;
use App\Repositories\NationalityRepository;
use App\Repositories\PatientExamRepository;
use App\Repositories\PatientRepository;
use App\Repositories\RelapseRepository;
use App\Repositories\ReleaseRepository;
use App\Repositories\TBAppointmentRepository;
use App\Repositories\TrackingAppointmentChartRepository;
use App\Repositories\VitalSignsMeasurementRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    public $bindings = [
        BaseRepository::class => EloquentBaseRepository::class,
        PatientRepository::class => EloquentPatientRepository::class,
        HealthUnityRepository::class => EloquentHealthUnityRepository::class,
        DistrictRepository::class => EloquentDistrictRepository::class,
        CityRepository::class => EloquentCityRepository::class,
        ReleaseRepository::class => EloquentReleaseRepository::class,
        RelapseRepository::class => EloquentRelapseRepository::class,
        NationalityRepository::class => EloquentNationalityRepository::class,
        TrackingAppointmentChartRepository::class => EloquentTrackingAppointmentChartRepository::class,
        VitalSignsMeasurementRepository::class => EloquentVitalSignsMeasurementRepository::class,
        PatientExamRepository::class => EloquentPatientExamRepository::class,
        AppointmentRepository::class => EloquentAppointmentRepository::class,
        TbAppointmentRepository::class => EloquentTbAppointmentRepository::class
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
