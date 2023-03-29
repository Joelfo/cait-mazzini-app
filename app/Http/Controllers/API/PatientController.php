<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseAPIController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Http\Requests\PatientRequest;
use App\Http\Resources\PatientResource;
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
     *      @OA\Property(property="id", type="number", example="29"),
     *      @OA\Property(property="name", type="string", example="Moisés"),
     *      @OA\Property(property="susCard", type="string", example="12345678"),
     *      @OA\Property(property="rg", type="string", example="123456789"),
     *      @OA\Property(property="cpf", type="string", example="12345678910"),
     *      @OA\Property(property="admissionDate", type="string", example="11-11-2020"),
     *      @OA\Property(property="type", type="string", example="TB"),
     *      @OA\Property(property="arrival", type="string", example="Referenciado"),
     *      @OA\Property(property="telephone1", type="string", example="21999999999"),
     *      @OA\Property(property="telephone2", type="string", example="2155555555"),
     *      @OA\Property(property="cep", type="string", example="21111050"),
     *      @OA\Property(property="isPregnant", type="bool", example="false"),
     *      @OA\Property(property="birthDate", type="string", example="21-02-1954"),
     *      @OA\Property(property="recordCode", type="string", example="TB99999"),
     *      @OA\Property(property="motherName", type="string", example="Rute"),
     *      @OA\Property(property="address", type="string", example="Rua do Nunca, número 999, apartamento 1851"),
     *      @OA\Property(
     *        property="links",
     *        type="array"", 
     *        @OA\Items(
     *          @OA\Property(property="self", type="string")
     *          @OA\Property(property="type", type="string"),
     *          @OA\Property(property="href", type="string"),
     *          ))
     *        )
     *       
     *      )
     *    )))
     */
    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }
  
   
    public function show(int $patientId){
        return $this->controllerHelper->show($patientId);
    }

    public function store(PatientRequest $request){
        return $this->controllerHelper->store($request);    
    }

    public function destroy(int $patientId){
        return $this->controllerHelper->destroy($patientId);
    }

    public function update(int $id, PatientRequest $request){
        return $this->controllerHelper->update($id, $request);
    }

    public function showByHealthUnity(int $healthUnityId){
        $patients = $this->service->showByHealthUnity($healthUnityId);
        return response()->json($patients);
    }

}
