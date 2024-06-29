<?php

namespace Domain\Models3D\Resources;

use Domain\Models3D\Model3D;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

class IndexModel3DResource extends ResourceCollection
{
    /** @var Collection $resource */
    public $resource;

    public function toArray(Request $request): array
    {
        return $this->resource->map(
            fn(Model3D $model) => new ShowModel3DResource($model)
        )->toArray();
    }
}
