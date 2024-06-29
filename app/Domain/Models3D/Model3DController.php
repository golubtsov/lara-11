<?php

namespace Domain\Models3D;

use App\Http\Controllers\Controller;
use Domain\Models3D\Requests\StoreModel3DRequest;
use Domain\Models3D\Resources\IndexModel3DResource;
use Domain\Models3D\Resources\ShowModel3DResource;

class Model3DController extends Controller
{
    public function __construct(private readonly Model3DService $service)
    {
    }

    public function index(): IndexModel3DResource
    {
        return new IndexModel3DResource(
            Model3D::query()
                ->with('file')
                ->get()
        );
    }

    public function store(StoreModel3DRequest $request): ShowModel3DResource
    {
        return new ShowModel3DResource(
            $this->service->storeWithFile($request, 'model')
        );
    }

    public function show()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
