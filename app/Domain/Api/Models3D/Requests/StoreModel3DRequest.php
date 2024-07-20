<?php

namespace Domain\Api\Models3D\Requests;

use Domain\Api\Models3D\Rules\StlFileRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreModel3DRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'model' => ['required', new StlFileRule()],
        ];
    }
}
