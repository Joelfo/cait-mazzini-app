<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\HealthUnityRequest;
use App\Services\HealthUnityService;


class HealthUnityController extends Controller
{
    public function __construct(private HealthUnityService $service)
    {
        
    }

    public function index(){
        return response()
            ->json($this->service->index(), 200);
        
    }

    public function show(int $healthUnityId){
        return response()->json($this->service->show($healthUnityId), 200);
    }

    public function store(HealthUnityRequest $request){
        return response()
            ->json($this->service->store($request->all()), 201);
        
    }

    public function destroy(int $healthUnityId){
        $this->service->destroy($healthUnityId);
        return response()->noContent();
        
    }

    public function update(int $id, HealthUnityRequest $request){
        return response()->json($this->service->update($id, $request->all()), 200);
    }
}
