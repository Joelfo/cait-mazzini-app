<?php

namespace App\Http\Controllers\API;

use App\DTOs\CityDTO;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Http\Requests\CityRequest;
use App\Http\Resources\CityResource;
use App\Services\CityService;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public $controllerHelper;

    public function __construct(private CityService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, CityResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function all() {
        $cities = $this->service->all();
        return CityResource::collection($cities);
    }

    public function show(int $cityId){
        return $this->controllerHelper->show($cityId);
    }

    public function store(CityDTO $cityDTO){
        return $this->controllerHelper->store($cityDTO);
    }

    public function destroy(int $cityId){
        return $this->controllerHelper->destroy($cityId);
    }

    public function update(int $id, CityDTO $cityDTO){
        return $this->controllerHelper->update($id, $cityDTO);
    }
}
