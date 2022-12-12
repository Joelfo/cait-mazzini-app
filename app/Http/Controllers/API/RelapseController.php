<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\RelapseRequest;
use App\Services\RelapseService;
class RelapseController extends Controller
{
    public function __construct(private RelapseService $service)
    {
        
    }

    public function index(){
        return response()
            ->json($this->service->index(), 200);
        
    }

    public function show(int $relapseId){
     return response()->json($this->service->show($relapseId), 200);
    }

    public function store(RelapseRequest $request){
        return response()
            ->json($this->service->store($request->all()), 201);
        
    }

    public function destroy(int $relapseId){
     $this->service->destroy($relapseId);
     return response()->noContent();
        
    }

    public function update(int $id, RelapseRequest $request){
        return response()->json($this->service->update($id, $request->all()), 200);
    }
}
