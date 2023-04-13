<?php

namespace App\Http\Controllers\API;

use App\DTOs\PatientDTO;
use App\Http\Controllers\BaseAPIController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Http\Requests\PatientRequest;
use App\Http\Resources\PatientResource;
use App\Models\City;
use App\Models\District;
use App\Models\HealthUnity;
use App\Models\Nationality;
use App\Models\Patient;
use App\Services\PatientService;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
class PatientController extends 
Controller
{
    private CRUDControllerHelper $controllerHelper;

    public function __construct(private PatientService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, PatientResource::class);
    }

    /**
     * @OA\Get(
     *  path = "/api/patients",
     *  @OA\Parameter(
     *    name=""
     *  )
     *  @OA\Response(
     *    response="200",
     *    description="A lista paginada de pacientes.",
     *    @OA\JsonContent(
     *      @OA\Property(
     *        property="data", 
     *        type="array",
     *        @OA\Items(ref="#/components/schemas/Patient")
     *      ),
     *      @OA\Property(
     *        property="links",
     *        @OA\Property(property="first" type="string"),
     *        @OA\Property(property="last" type="string"),
     *        @OA\Property(property="prev" type="string"),
     *        @OA\Property(property="next" type="string")
     *      )
     * )))
     */
    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }
  
    /**
     * @OA\Get(
     *  path = "/api/patients/{patientId}",
     *  @OA\Parameter(
     *    name="patientId",
     *    in="path",
     *    required=true
     *  ),
     *  @OA\Response(
     *    response="200",
     *    description="The searched patient.",
     *    @OA\JsonContent(
     *      @OA\Property(property="data", ref="#/components/schemas/Patient")
     * )))
     */
    public function show(int $patientId){
        return $this->controllerHelper->show($patientId);
    }

    /**
     * @OA\Post(
     *  path = "/api/patients",
     *  @OA\Parameter(
     *    name="patientId",
     *    in="path",
     *    required=true
     *  ),
     *  @OA\Response(
     *    response="200",
     *    description="The searched patient.",
     *    @OA\JsonContent(
     *      @OA\Property(property="data", ref="#/components/schemas/Patient")
     * )))
     */
    public function store(PatientDTO $patientDTO){
        //$patient = new Patient();
       // $patient->fill($request->all());
        //return response()->json($patient);
        //$patient->district()->associate((new District())->fill($request->district));
        //$patient->birthplace()->associate((new City())->fill($request->birthplace));
        //$patient->nationality()->associate((new Nationality())->fill($request->nationality));
        //if ($request->health_unity != null)
           // $patient->healthUnity()->associate((new HealthUnity())->fill($request->health_unity));
        //$patient->save();
        //return response('', 205);
        return $this->controllerHelper->store($patientDTO);    
    }

    public function destroy(int $patientId){
        return $this->controllerHelper->destroy($patientId);
    }

    public function update(int $id, PatientDTO $patientDTO){
        return $this->controllerHelper->update($id, $patientDTO);
    }

    public function showByHealthUnity(int $healthUnityId){
        $patients = $this->service->showByHealthUnity($healthUnityId);
        return response()->json($patients);
    }

}
