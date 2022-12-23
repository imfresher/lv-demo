<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Contracts\Repositories\MenuRepository;
use App\Http\Resources\MenuResource;

class MenuController extends V1Controller
{
    public function __construct(MenuRepository $repository)
    {
        parent::__construct($repository);
    }

    public function index(Request $request)
    {
        // $query = $this->repository->model->orderBy($request->column, $request->order);
        // $menus = $query->paginate($request->per_page ?? 5);
        $menus = $this->repository->list($request->per_page ?? 5, '*', $request->column, $request->order);

        return MenuResource::collection($menus);
    }
}
