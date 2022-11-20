<?php
namespace App\Repositories\Eloquent;

class EloquentBaseRepository{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    protected function resolveModel(){
        return app($this->model);
    }

    public function all() : Array {
        return $this->model->all()->toArray();
    }

    public function create(Array $data) {
        $createdModel = $this->model->create($data);
        return $createdModel;
    }

    public function update($modelInstance, Array $data) {
        $updatedModel = $modelInstance->fill($data);
        $modelInstance->save();
        return $updatedModel;
    }
    
    public function delete($modelInstance) {
        $modelInstance->delete();
        return $modelInstance;
    }
}
