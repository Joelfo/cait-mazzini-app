<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Http\Requests\RelapseRequest;
use App\Http\Resources\RelapseResource;
use App\Services\RelapseService;
use Illuminate\Http\Request;

class RelapseController extends Controller
{
    public $controllerHelper;

    public function __construct(private RelapseService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, RelapseResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $relapseId){
        return $this->controllerHelper->show($relapseId);
    }

    public function store(RelapseRequest $request){
        return $this->controllerHelper->store($request);    
    }

    public function destroy(int $relapseId){
        return $this->controllerHelper->destroy($relapseId);
    }

    public function update(int $id, RelapseRequest $request){
        return $this->controllerHelper->update($id, $request);
    }
}
