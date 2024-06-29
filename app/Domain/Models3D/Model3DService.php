<?php

namespace Domain\Models3D;

use App\Services\AbstractBaseService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class Model3DService extends AbstractBaseService
{
    public function __construct()
    {
        $this->model = new Model3D();
    }

    public function storeWithFile(FormRequest $request, string $attribute): Model
    {
        $file = $request->file($attribute);
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
