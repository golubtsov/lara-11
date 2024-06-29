<?php

namespace Domain\Models3D\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Domain\Models3D\Rules\StlFileRule;

class StoreModel3DRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'model' => ['required', new StlFileRule()],
        ];
    }
}
