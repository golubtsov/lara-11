<?php

namespace App\Http\Controllers;

use App\Repositories\BaseRepositoryInterface;

abstract class Controller
{
    protected BaseRepositoryInterface $repository;

    public function __construct()
    {
    }
}
