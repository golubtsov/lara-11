<?php

namespace Domain\Api\Users;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    public function index(): Collection
    {
        return User::all();
    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function delete()
    {

    }
}
