<?php

namespace App\Services;

use App\DTOs\Interfaces\EloquentModelCastable;
use App\Repositories\BaseRepository;

class BaseService {
    protected $repository;

    /**
     * @param mixed|BaseRepository $repository
     */
    protected function setRepository($repository)
    {
        $this->repository = $repository;
    }

    public function index(int $pageLimit = 10)
    {
        return $this->repository->allPaginated($pageLimit);
    }

    public function show(int $id)
    {
        return $this->repository->getById($id);
    }

    public function store(EloquentModelCastable $dto){
        return $this->repository->create($dto->toModelArray());
    }

    public function update(EloquentModelCastable $dto){
        $model->fill($);
        return $this->repository->update($dto->toModelArray());
    }

    public function destroy(int $id){
        $this->repository->delete($id);
    }

}