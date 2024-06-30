<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractBaseService
{
    protected Model $model;

    public function store(array $data): Model
    {
        return $this->model->newQuery()->create($data);
    }

    public function delete(int $id)
    {
        $model = $this->model::query()->findOrFail($id);
        return $model->delete();
    }

    public abstract function storeWithFile(array $data, string $field): Model;
}
