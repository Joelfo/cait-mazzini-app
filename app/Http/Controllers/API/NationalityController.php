<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\NationalityRequest;
use App\Services\NationalityService;

class NationalityController extends Controller
{
    public function __construct(private NationalityService $service)
    {
        
    }

    public function index(){
        return response()
            ->json($this->service->index(), 200);
        
    }

    public function show(int $nationalityId){
        return response()->json($this->service->show($nationalityId), 200);
    }

    public function store(NationalityRequest $request){
        return response()
            ->json($this->service->store($request->all()), 201);
        
    }

    public function destroy(int $nationalityId){
        $this->service->destroy($nationalityId);
        return response()->noContent();
        
    }

    public function update(int $id, NationalityRequest $request){
        return response()->json($this->service->update($id, $request->all()), 200);
    }
}
