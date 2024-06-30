<?php

namespace Domain\Models3D;

use App\Services\AbstractBaseService;
use Illuminate\Database\Eloquent\Model;

class Model3DService extends AbstractBaseService
{
    public function __construct()
    {
        $this->model = new Model3D();
    }

    public function delete(int $id)
    {
        $model = $this->model::query()->findOrFail($id);

        if (
            $model->file->path
            && file_exists(storage_path() . '/app/public/' . $model->file->path)
        ) {
            unlink(storage_path() . '/app/public/' . $model->file->path);
            $model->file->delete();
        }

        return $model->delete();
    }

    public function storeWithFile(array $data, string $field): Model
    {
        $file = $data[$field];
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $fileOriginalName = $file->getClientOriginalName();
        $path = $file->storeAs('models', $fileName, 'public');

        $model = $this->model->create([
            'name' => $fileOriginalName,
        ]);

        $model->file()->create([
            'path' => $path
        ]);

        return $model;
    }
}
