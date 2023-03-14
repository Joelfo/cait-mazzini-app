<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Http\Requests\HealthUnityRequest;
use App\Http\Resources\HealthUnityResource;
use App\Services\HealthUnityService;
use Illuminate\Http\Request;

class HealthUnityController extends Controller
{
    public $controllerHelper;

    public function __construct(private HealthUnityService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, HealthUnityResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $healthUnityId){
        return $this->controllerHelper->show($healthUnityId);
    }

    public function store(HealthUnityRequest $request){
        return $this->controllerHelper->store($request);    
    }

    public function destroy(int $healthUnityId){
        return $this->controllerHelper->destroy($healthUnityId);
    }

    public function update(int $id, HealthUnityRequest $request){
        return $this->controllerHelper->update($id, $request);
    }
}
