<?php

namespace App\Contracts\Repositories;

interface AbstractRepository
{
    public function getAll();

    public function list($select, $limit);

    public function getById($id);

    public function save($data);

    public function update($data, $id);

    public function delete($id);
}
