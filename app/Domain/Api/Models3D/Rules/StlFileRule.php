<?php

namespace Domain\Api\Models3D\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\UploadedFile;

class StlFileRule implements Rule
{
    public function passes($attribute, $value): bool
    {
        if (!$value->isValid()) {
            return false;
        }

        /** @var UploadedFile $value */
        if ($value->getClientMimeType() === 'model/stl') {
            return true;
        }

        return false;
    }

    public function message(): string
    {
        return 'The :attribute must be a valid STL file.';
    }
}
