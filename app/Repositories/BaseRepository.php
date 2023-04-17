<?php
namespace App\Repositories;

interface BaseRepository {
    public function all();

    public function allPaginated(int $pageLimit);

    public function getById(int $id);

    public function create($data);

    public function delete($id);

    public function update($id, $data);
}
