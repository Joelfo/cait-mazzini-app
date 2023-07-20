<?php

namespace App\Http\Controllers\API;

use App\DTOs\NurseryIdentificationInfoDTO;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Http\Resources\NurseryIdentificationInfoResource;
use App\Services\NurseryIdentificationInfoService;
use Illuminate\Http\Request;

class NurseryIdentificationInfoController extends Controller
{
    public $controllerHelper;

    public function __construct(private NurseryIdentificationInfoService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, NurseryIdentificationInfoResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $NurseryIdentificationInfoId){
        return $this->controllerHelper->show($NurseryIdentificationInfoId);
    }

    public function store(NurseryIdentificationInfoDTO $NurseryIdentificationInfoDTO){
        return $this->controllerHelper->store($NurseryIdentificationInfoDTO);
    }

    public function destroy(int $NurseryIdentificationInfoId){
        return $this->controllerHelper->destroy($NurseryIdentificationInfoId);
    }

    public function update(int $id, NurseryIdentificationInfoDTO $NurseryIdentificationInfoDTO){
        return $this->controllerHelper->update($id, $NurseryIdentificationInfoDTO);
    }
}
