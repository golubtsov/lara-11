<?php

namespace Domain\Api\Models3D;

use App\Repositories\AbstractBaseRepository;
use Illuminate\Database\Eloquent\Model;

class Model3DRepository extends AbstractBaseRepository
{
    protected Model|string $model = Model3D::class;

    protected array $relationShips = ['file'];

    public function __construct()
    {
        $this->service = new Model3DService();
    }

    public function store(array $data, string $field): Model
    {
        return $this->service->storeWithFile($data, $field);
    }

    public function show(int $id): Model
    {
        return $this->model::query()->findOrFail($id);
    }

    public function update(int $id, array $data): Model3D
    {
        $model = $this->model::query()->findOrFail($id);
        $data['name'] = $data['name'] . '.stl';
        $model->update($data);
        return $model->refresh();
    }

    public function delete(int $id)
    {
        return $this->service->delete($id);
    }
}
