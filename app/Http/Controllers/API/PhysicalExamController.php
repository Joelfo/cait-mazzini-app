<?php

namespace App\Http\Controllers\API;

use App\DTOs\PhysicalExamDTO;
use App\DTOs\PhysicalExamDTOData;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Http\Resources\PhysicalExamResource;
use App\Services\PhysicalExamService;
use Illuminate\Http\Request;

class PhysicalExamController extends Controller
{
    public $controllerHelper;

    public function __construct(private PhysicalExamService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, PhysicalExamResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $physicalExamId){
        return $this->controllerHelper->show($physicalExamId);
    }

    public function store(PhysicalExamDTO $physicalExamDTO){
        return $this->controllerHelper->store($physicalExamDTO);
    }

    public function destroy(int $physicalExamId){
        return $this->controllerHelper->destroy($physicalExamId);
    }

    public function update(int $id, PhysicalExamDTO $physicalExamDTO){
        return $this->controllerHelper->update($id, $physicalExamDTO);
    }
}
