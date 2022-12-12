<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReleaseRequest;
use App\Services\ReleaseService;

class ReleaseController extends Controller
{
    public function __construct(private ReleaseService $service)
    {
        
    }

    public function index(){
        return response()
            ->json($this->service->index(), 200);
        
    }

    public function show(int $releaseId){
        return response()->json($this->service->show($releaseId), 200);
    }

    public function store(ReleaseRequest $request){
        return response()
            ->json($this->service->store($request->all()), 201);
        
    }

    public function destroy(int $releaseId){
        $this->service->destroy($releaseId);
        return response()->noContent();
        
    }

    public function update(int $id, ReleaseRequest $request){
        return response()->json($this->service->update($id, $request->all()), 200);
    }
}
