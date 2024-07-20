<?php

namespace Domain\Api\Files\Resources;

use Domain\Api\Files\File;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowFileResource extends JsonResource
{
    public $resource = File::class;

    public function toArray(Request $request): array
    {
        return [
            'path' => $this->resource->path,
        ];
    }
}
