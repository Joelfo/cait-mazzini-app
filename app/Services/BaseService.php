<?php

namespace App\Services;
use App\Repositories\BaseRepository;

class BaseService {
    protected $repository;

    protected function setRepository(BaseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->all();
    }

    public function show(int $id)
    {
        return $this->repository->read($id);
    }

    public function store(array $data){
        return $this->repository->create($data);
    }

    public function update(int $id, array $data){
        return $this->repository->update($id, $data);
    }

    public function destroy(int $id){
        $this->repository->delete($id);
    }

}