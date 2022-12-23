<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\AbstractRepository;
use App\Contracts\Repositories\AbstractRepository as AbstractRepositoryInterface;

class AbstractRepositoryEloquent extends AbstractRepository implements AbstractRepositoryInterface
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function list($limit = 20, $select = '*', $sortCol = '', $order = 'desc')
    {
        $query = $this->model
            ->select($select);

        if ($sortCol != '') {
            $query->orderBy($sortCol, $order);
        }

        return $query->paginate($limit);
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function save($data)
    {
        return $this->model->create($data);
    }

    public function update($data, $id)
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }
}
