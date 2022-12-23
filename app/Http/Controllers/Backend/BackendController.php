<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\AbstractController;

class BackendController extends AbstractController
{
    protected $prefix = 'backend';

    public function __construct($repository = null)
    {
        $this->repository = $repository;
    }
}
