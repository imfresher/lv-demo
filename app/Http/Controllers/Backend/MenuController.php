<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Contracts\Repositories\MenuRepository;

class MenuController extends BackendController
{
    protected $resource = 'menus';

    public function __construct(MenuRepository $menu)
    {
        parent::__construct($menu);
    }

    public function index()
    {
        $compact = [];

        $compact['items'] = $this->repository->list(3);
        $compact['appends'] = null;

        return view('backend.menus.index', $compact);
    }

    public function create()
    {
        return view('backend.menus.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $this->doRequest(function () use ($data) {
            return $this->save($data);
        });
    }

    protected function save($data = [], $id = null)
    {
        return ! empty($id)
            ? $this->repository->update($data, $id)
            : $this->repository->save($data);
    }
}
