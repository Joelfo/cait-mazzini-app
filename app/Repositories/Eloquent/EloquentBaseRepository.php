<?php
namespace App\Repositories\Eloquent;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;

class EloquentBaseRepository{
    protected $model;


    /**
     * @param mixed $modelClass 
     * The class which the model used by the specific repository belongs to.
     */
    public function __construct($modelClass)
    {
        $this->model = app($modelClass);
    }

    public function getById(int $id){
        return $this->model->find($id);
    }

    public function all() {
        return $this->model->all();
    }

    public function allPaginated(int $pageLimit){
        return $this->model->paginate($pageLimit);
    }

    public function create($data) {
        $createdModel = $this->model->create($data);
        return $createdModel;
    }

    public function update($model) { 
        $model->save();
        return $model;
    }
    
    public function delete($id) {
        $this->model->destroy($id);
    }

    protected function getByRelationship($foreignKey, $relatedModelId){
        return $this->model->where($foreignKey, $relatedModelId)->get();
    }
}
