<?php
namespace App\Repositories\Eloquent;

use App\Models\TrackingAppointmentChart;
use App\Repositories\TrackingAppointmentChartRepository;

class EloquentTrackingAppointmentChartRepository extends EloquentBaseRepository implements TrackingAppointmentChartRepository {
    public function __construct()
    {
        parent::__construct(TrackingAppointmentChart::class);
    }
}
