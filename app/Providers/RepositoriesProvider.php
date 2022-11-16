<?php

namespace App\Providers;

use App\Repositories\Eloquent\EloquentPatientRepository;
use App\Repositories\PatientRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    public $bindings = [
        PatientRepository::class => EloquentPatientRepository::class,
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
