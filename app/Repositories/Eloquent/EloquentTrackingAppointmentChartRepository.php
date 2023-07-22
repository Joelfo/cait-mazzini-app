<?php
namespace App\Repositories\Eloquent;

use App\Enums\TrackingAppointmentChartType;
use App\Models\TrackingAppointmentChart;
use App\Repositories\TrackingAppointmentChartRepository;

class EloquentTrackingAppointmentChartRepository extends EloquentBaseRepository implements TrackingAppointmentChartRepository {
    public function __construct()
    {
        parent::__construct(TrackingAppointmentChart::class);
    }

    public function getByPatientAndTypePaginated(int $patientId, TrackingAppointmentChartType $type, int $limitPerPage) {
        return $this->model->where('patient_id', '=', $patientId)->where('type', '=', $type)->paginate();
    }
}
