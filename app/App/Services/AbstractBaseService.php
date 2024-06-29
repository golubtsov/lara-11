<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

abstract class AbstractBaseService
{
    protected Model $model;

    public function index()
    {

    }

    public function store(array $data): Model
    {
        return $this->model->newQuery()->create($data);
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public abstract function storeWithFile(FormRequest $request, string $attribute): Model;
}
