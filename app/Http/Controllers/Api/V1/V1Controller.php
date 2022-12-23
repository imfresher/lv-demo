<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;

class V1Controller extends ApiController
{
    public function __construct($repository = null)
    {
        $this->repository = $repository;
    }
}
