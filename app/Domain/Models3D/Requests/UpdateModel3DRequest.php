<?php

namespace Domain\Models3D\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateModel3DRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
        ];
    }
}
