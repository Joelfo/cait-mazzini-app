<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use App\Services\PatientService;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct(private PatientService $service)
    {
        
    }

    public function index(Request $request){
        $limit = 10;
        if ($request->filled('limit')){
            $limit = $request->input('limit');
            if (is_numeric($request->input('limit'))){
                $limit = (int) $limit;
            }
        }
        
        $resultPage = $this->service->index($limit);
        return response()->json($resultPage, 200);
        
    }

    public function show(int $patientId){
        return response()->json($this->service->show($patientId), 200);
    }

    public function store(PatientRequest $request){
        return response()
            ->json($this->service->store($request->all()), 201);
        
    }

    public function destroy(int $patientId){
        $this->service->destroy($patientId);
        return response()->noContent();
        
    }

    public function update(int $id, PatientRequest $request){
        return response()->json($this->service->update($id, $request->all()), 200);
    }

    public function showByHealthUnity(int $healthUnityId){
        $patients = $this->service->showByHealthUnity($healthUnityId);
        return response()->json($patients);
    }

}
