<?php

namespace App\Library\Menu;

use Illuminate\Support\Facades\View;

class Menus
{
    protected $menus = [];

    public function make(string $name, \Closure $callback)
    {
        if (! is_callable($callback)) {
            return null;
        }

        if (! array_key_exists($name, $this->menus)) {
            $menu = new Menu($name);
            $this->menus[$name] = $menu;
        }

        // View::share($name, $this->menus[$name]);

        call_user_func($callback, $this->menus[$name]);

        return $this->menus[$name];
    }
}
