<?php
namespace App\Repositories;

interface BaseRepository {
    public function all();

    public function read($id);

    public function create($data);

    public function delete($model);

    public function update($model, $data);
}
