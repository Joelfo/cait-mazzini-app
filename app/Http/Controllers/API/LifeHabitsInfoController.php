<?php

namespace App\Http\Controllers\API;

use App\DTOs\LifeHabitsInfoDTO;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Http\Requests\LifeHabitsInfoRequest;
use App\Http\Resources\LifeHabitsInfoResource;
use App\Services\LifeHabitsInfoService;
use Illuminate\Http\Request;

class LifeHabitsInfoController extends Controller
{
    public $controllerHelper;

    public function __construct(private LifeHabitsInfoService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, LifeHabitsInfoResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $LifeHabitsInfoId){
        return $this->controllerHelper->show($LifeHabitsInfoId);
    }

    public function store(LifeHabitsInfoDTO $LifeHabitsInfoDTO){
        return $this->controllerHelper->store($LifeHabitsInfoDTO);
    }

    public function destroy(int $LifeHabitsInfoId){
        return $this->controllerHelper->destroy($LifeHabitsInfoId);
    }

    public function update(int $id, LifeHabitsInfoDTO $LifeHabitsInfoDTO){
        return $this->controllerHelper->update($id, $LifeHabitsInfoDTO);
    }
}
