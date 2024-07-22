<?php

namespace Domain\Web\Dictionary\Words\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWordRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'from' => ['required'],
            'to' => ['required'],
            'word' => ['required', 'string', 'min:1'],
            'translate' => ['required', 'string', 'min:1'],
            'original_example' => ['sometimes', 'string', 'min:1'],
            'translated_example' => ['sometimes', 'string', 'min:1'],
        ];
    }
}
