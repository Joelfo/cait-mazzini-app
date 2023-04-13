<?php

namespace App\Http\Controllers\API;

use App\DTOs\NationalityDTO;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\CRUDControllerHelper;
use App\Http\Requests\NationalityRequest;
use App\Http\Resources\NationalityResource;
use App\Services\NationalityService;
use Illuminate\Http\Request;

class NationalityController extends Controller
{
    public $controllerHelper;

    public function __construct(private NationalityService $service)
    {
        $this->controllerHelper = new CRUDControllerHelper($service, NationalityResource::class);
    }

    public function index(Request $request){
        return $this->controllerHelper->index($request);
    }

    public function show(int $nationalityId){
        return $this->controllerHelper->show($nationalityId);
    }

    public function store(NationalityDTO $nationalityDTO){
        return $this->controllerHelper->store($nationalityDTO);    
    }

    public function destroy(int $nationalityId){
        return $this->controllerHelper->destroy($nationalityId);
    }

    public function update(int $id, NationalityDTO $nationalityDTO){
        return $this->controllerHelper->update($id, $nationalityDTO);
    }
}
