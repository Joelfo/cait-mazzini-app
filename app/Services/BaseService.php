<?php

namespace App\Services;

use App\DTOs\Interfaces\EloquentModelCastable;
use App\Repositories\BaseRepository;

abstract class BaseService {
    protected $repository;

    public function __construct(BaseRepository $repository){
        $this->setRepository($repository);
    }

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

    public function store($dto){
        $this->repository->create($this->getModelAttributesFromDTO($dto));
    }

    public function update($id, $dto){
        return $this->repository->update($id, $this->getModelAttributesFromDTO($dto));
    }

    public function destroy(int $id){
        $this->repository->delete($id);
    }

    public abstract function getModelAttributesFromDTO($dto);

}