<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Services\CityService;


class CityController extends Controller
{

    public function __construct(private CityService $service)
    {
        
    }

    public function index(){
        return response()
            ->json($this->service->index(), 200);
        
    }

    public function show(int $cityId){
        return response()->json($this->service->show($cityId), 200);
    }

    public function store(CityRequest $request){
        return response()
            ->json($this->service->store($request->all()), 201);
        
    }

    public function destroy(int $cityId){
        $this->service->destroy($cityId);
        return response()->noContent();
        
    }

    public function update(int $id, CityRequest $request){
        return response()->json($this->service->update($id, $request->all()), 200);
    }
}
