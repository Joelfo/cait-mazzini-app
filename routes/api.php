<?php


use App\Http\Controllers\API\AppointmentController;
use App\Http\Controllers\API\CityController;
use App\Http\Controllers\API\DistrictController;
use App\Http\Controllers\API\HealthUnityController;
use App\Http\Controllers\API\LifeHabitsInfoController;
use App\Http\Controllers\API\NationalityController;
use App\Http\Controllers\API\NurseryIdentificationInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PatientController;
use App\Http\Controllers\API\PatientExamController;
use App\Http\Controllers\API\PhysicalExamController;
use App\Http\Controllers\API\PntAppointmentController;
use App\Http\Controllers\API\RelapseController;
use App\Http\Controllers\API\ReleaseController;
use App\Http\Controllers\API\TbAppointmentController;
use App\Http\Controllers\API\TrackingAppointmentChartController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\VitalSignsMeasurementController;
use App\Models\HealthUnity;
use App\Models\Nationality;
use App\Models\TrackingAppointmentChart;
use App\Models\VitalSignsMeasurement;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('patients/{patientId}/trackingAppointmentCharts/{type}', [TrackingAppointmentChartController::class, 'getByPatientAndType'])
    ->name('patients.trackingAppointmentCharts');
Route::apiResource('patients', PatientController::class);

Route::get('healthUnities/all', [HealthUnityController::class, 'all'])->name('healthUnities.all');
Route::get('/healthUnities/{healthUnity}/patients', [PatientController::class, 'showByHealthUnity'])
    ->name('healthUnities.patients');
Route::apiResource('healthUnities', HealthUnityController::class);

Route::prefix('/cities')->name('cities.')->group(function()
{
    //Route::get('/{cityId}/districts', [DistrictController::class, 'showByCity'])->name('districts');
    //Route::get('/{cityId}/patients', [PatientController::class, 'showByCity'])->name('patients');
}
);

Route::get('cities/all', [CityController::class, 'all'])->name('cities.all');
Route::get('cities/{cityId}/districts', [DistrictController::class, 'getByCity'])
    ->name('cities.districts');
Route::apiResource('cities', CityController::class);

Route::apiResource('districts', DistrictController::class);

Route::get('nationalities/all', [NationalityController::class, 'all'])->name('nationalities.all');
Route::apiResource('nationalities', NationalityController::class);

Route::apiResource('relapses', RelapseController::class);

Route::apiResource('releases', ReleaseController::class);

Route::apiResource('users', UserController::class);

Route::get('/trackingAppointmentCharts/{chartId}/patientExams', [PatientExamController::class, 'showByChart'])
    ->name('trackingAppointmentCharts.patientExams');

Route::apiResource('trackingAppointmentCharts', TrackingAppointmentChartController::class);

Route::apiResource('vitalSignsMeasurements', VitalSignsMeasurementController::class);

Route::apiResource('pntAppointments', PntAppointmentController::class)->except(['post', 'put']);

Route::apiResource('tbAppointments', TbAppointmentController::class);

Route::apiResource('physicalExams', PhysicalExamController::class);

Route::apiResource('nurseryIdentificationInfos', NurseryIdentificationInfoController::class);

Route::apiResource('lifeHabitsInfos', LifeHabitsInfoController::class);
