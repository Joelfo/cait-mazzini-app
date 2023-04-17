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

    public function allPaginated(int $pageLimit)
    {
        return $this->model->paginate($pageLimit);
    }

    public function create($data) 
    {
        $this->model->create($data);
    }

    public function update($id, $modelData) 
    { 
        $modelToSave = $this->model->find($id);
        $modelToSave->fill($modelData);
        $modelToSave->save();
        return $modelToSave;
    }
    
    public function delete($id) 
    {
        $this->model->destroy($id);
    }

    protected function getByBelongsToRelationship($foreignKey, $relatedModelId)
    {
        return $this->model->where($foreignKey, $relatedModelId)->get();
    }

    protected function getByManyToManyRelationship($relationship, $foreignKey, $relatedModelId)
    {
        return $this->model->whereRelation($relationship, $foreignKey, $relatedModelId);
    }

}
