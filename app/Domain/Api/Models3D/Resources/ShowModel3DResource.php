<?php

namespace Domain\Api\Models3D\Resources;

use Domain\Api\Files\Resources\ShowFileResource;
use Domain\Api\Models3D\Model3D;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowModel3DResource extends JsonResource
{
    public $resource = Model3D::class;

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'file' => new ShowFileResource($this->resource->file),
        ];
    }
}
