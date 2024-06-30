<?php

namespace App\Repositories;

use App\Services\AbstractBaseService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class AbstractBaseRepository implements BaseRepositoryInterface
{
    protected Model|string $model = Model::class;

    protected AbstractBaseService|string $service;

    protected array $relationShips = [];

    public function filter(): Collection
    {
        return $this->model::query()->with($this->relationShips)->get();
    }
}
