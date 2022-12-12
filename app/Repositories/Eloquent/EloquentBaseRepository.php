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
