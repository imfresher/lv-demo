<?php

namespace App\Library\Menu;

use Illuminate\Support\Arr;

class MenuItem
{
    protected $menu;

    protected $title;

    protected $options;

    protected $link;

    public function __construct($menu, $title, $options)
    {
        $this->menu = $menu;
        $this->title = $title;
        $this->options = $options;

        // if (! is_array($options)) {
        //     $path = ['url' => $options];
        // } elseif (isset($options['raw']) && true == $options['raw']) {
        //     $path = null;
        // } else {
        //     $path = Arr::only('url', 'route');
        // }

        // $this->link = $path ? new Link($path, $this->menu) : null;
    }

    public function title()
    {
        return $this->title;
    }

    public function link()
    {
        return $this->link;
    }
}
