<?php
namespace App\Repositories;

use App\Enums\TrackingAppointmentChartType;

interface TrackingAppointmentChartRepository extends BaseRepository {
    function getByPatientAndTypePaginated(int $patientId, TrackingAppointmentChartType $type, int $limitPerPage);
}
