<?php
namespace App\Repositories\Eloquent;

class EloquentBaseRepository{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    protected function resolveModel(){
        return app($this->modelClass);
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

    public function update($model, $data) {
        $updatedModel = $model->fill($data);
        $model->save();
        return $updatedModel;
    }
    
    public function delete($model) {
        $model->delete();
        return $model;
    }
}
