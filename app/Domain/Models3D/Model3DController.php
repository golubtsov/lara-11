<?php

namespace Domain\Models3D;

use App\Http\Controllers\Controller;
use Domain\Models3D\Requests\ShowModel3DRequest;
use Domain\Models3D\Requests\StoreModel3DRequest;
use Domain\Models3D\Requests\UpdateModel3DRequest;
use Domain\Models3D\Resources\IndexModel3DResource;
use Domain\Models3D\Resources\ShowModel3DResource;

class Model3DController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->repository = new Model3DRepository();
    }

    public function index(): IndexModel3DResource
    {
        return new IndexModel3DResource(
            $this->repository->filter()
        );
    }

    public function store(StoreModel3DRequest $request): ShowModel3DResource
    {
        $input = $request->validated();
        return new ShowModel3DResource(
            $this->repository->store($input, 'model')
        );
    }

    public function show(ShowModel3DRequest $request, int $id): ShowModel3DResource
    {
        return new ShowModel3DResource(
            $this->repository->show($id)
        );
    }

    public function update(UpdateModel3DRequest $request, int $id): ShowModel3DResource
    {
        $input = $request->validated();
        return new ShowModel3DResource(
            $this->repository->update($id, $input)
        );
    }

    public function destroy(int $id)
    {
        return $this->repository->delete($id);
    }
}
