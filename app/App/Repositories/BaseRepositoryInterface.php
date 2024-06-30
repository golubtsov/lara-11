<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

interface BaseRepositoryInterface
{
    public function filter(): Collection;
}
