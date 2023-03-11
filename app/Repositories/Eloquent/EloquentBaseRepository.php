<?php
namespace App\Repositories\Eloquent;

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

    public function read($id){
        return $this->model->find($id);
    }

    public function all() {
        return $this->model->all()->toArray();
    }

    public function create($data) {
        $createdModel = $this->model->create($data);
        return $createdModel;
    }

    public function update($id, $data) { 
        $model = $this->model->find($id);
        $model->fill($data);
        $model->save();
        return $model;
    }
    
    public function delete($id) {
        $this->model->destroy($id);
    }
}
