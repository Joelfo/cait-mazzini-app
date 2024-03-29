<?php 
namespace App\Http\Controllers\Helper;

use App\Services\BaseService;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CRUDControllerHelper {
    private $service;
    private $resource;

    public function __construct(BaseService $service, $resource)
    {
        $this->service = $service;
        $this->resource = $resource;
    }

    public function index(Request $request, int $limit = 10){
        if ($request->filled('limit')){
            $limit = $request->input('limit');
            if (is_numeric($request->input('limit'))){
                $limit = (int) $limit;
            }
        }
        
        $resultPage = $this->service->index($limit);
        return $this->resource::collection($resultPage);     
    }

    public function show(int $modelId){
        $model = $this->service->show($modelId);
        return new $this->resource($model);
    }

    public function store($dto){
        $model = $this->service->store($dto);
        return response(status: 201);  
    }

    public function destroy(int $modelId){
        $this->service->destroy($modelId);
        return response()->noContent();
        
    }

    public function update($id, $dto){
        $updatedModel = $this->service->update($id, $dto);
        return new $this->resource($updatedModel);
    }
}