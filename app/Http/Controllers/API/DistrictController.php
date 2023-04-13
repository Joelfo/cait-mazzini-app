<?php

namespace App\Http\Controllers\API;

use App\DTOs\DistrictDTO;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Http\Requests\DistrictRequest;
use App\Http\Resources\DistrictResource;
use App\Services\DistrictService;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public $controllerHelper;

    public function __construct(private DistrictService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, DistrictResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $districtId){
        return $this->controllerHelper->show($districtId);
    }

    public function store(DistrictDTO $districtDTO){
        return $this->controllerHelper->store($districtDTO);    
    }

    public function destroy(int $districtId){
        return $this->controllerHelper->destroy($districtId);
    }

    public function update(int $id, DistrictDTO $districtDTO){
        return $this->controllerHelper->update($id, $districtDTO);
    }
}
