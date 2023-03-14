<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Http\Requests\ReleaseRequest;
use App\Http\Resources\ReleaseResource;
use App\Services\ReleaseService;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public $controllerHelper;

    public function __construct(private ReleaseService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, ReleaseResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $releaseId){
        return $this->controllerHelper->show($releaseId);
    }

    public function store(ReleaseRequest $request){
        return $this->controllerHelper->store($request);    
    }

    public function destroy(int $releaseId){
        return $this->controllerHelper->destroy($releaseId);
    }

    public function update(int $id, ReleaseRequest $request){
        return $this->controllerHelper->update($id, $request);
    }
}
