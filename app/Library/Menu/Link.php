<?php

namespace App\Library\Menu;

class Link
{
    const $defaultClassName = 'nav__link';

    protected $menu;

    protected $path;

    protected $classes;

    public function __construct($path, $menu)
    {
        $this->menu = $menu;
        $this->path = $path;
    }
}
