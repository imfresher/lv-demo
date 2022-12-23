<?php

namespace App\Repositories\Eloquent;

use App\Contracts\Repositories\MenuRepository;
use App\Models\Menu;

class MenuRepositoryEloquent extends AbstractRepositoryEloquent implements MenuRepository
{
    public function __construct(Menu $menu)
    {
        parent::__construct($menu);
    }
}
