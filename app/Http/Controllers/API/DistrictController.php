<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\DistrictRequest;
use App\Services\DistrictService;

class DistrictController extends Controller
{
    public function __construct(private DistrictService $service)
    {
        
    }

    public function index(){
        return response()
            ->json($this->service->index(), 200);
        
    }

    public function show(int $districtId){
        return response()->json($this->service->show($districtId), 200);
    }

    public function store(DistrictRequest $request){
        return response()
            ->json($this->service->store($request->all()), 201);
        
    }

    public function destroy(int $districtId){
        $this->service->destroy($districtId);
        return response()->noContent();
        
    }

    public function update(int $id, DistrictRequest $request){
        return response()->json($this->service->update($id, $request->all()), 200);
    }
}
