<?php

namespace App\Library\Menu;

class Menu
{
    protected $menu;

    protected $items = [];

    public function __construct(string $menu)
    {
        $this->menu = $menu;
    }

    public function name()
    {
        return $this->menu;
    }

    public function add($title, $options)
    {
        $item = new MenuItem($this, $title, $options);

        $this->items[] = $item;

        return $item;
    }

    public function items()
    {
        return $this->items;
    }

    public function render()
    {
        $html = '<div class="nav__menu nav__'.$this->name().'">';
        $html .= '<div class="nav__wrapper">';
        // $html .= $this->renderItem($this);
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }

    public function renderItem($item)
    {
        $html = '';
        $html .= '<li class="nav__item">';
        $html .= '<a href="#" class="nav__link">';
        $html .= '<span class="nav__text">'.$item->title().'</span>';
        $html .= '</a>';

        if ($item) {
            $html .= $this->renderSubNav($this->items(), 'dropdown');
        }

        $html .= '</li>';

        return $html;
    }

    public function renderLink($link)
    {

    }

    public function renderMegaNav($items)
    {
        $html = '<div class="nav__mega">';

        foreach ($items as $value) {
            $html .= $this->renderItem($value);
        }

        $html .= '</div>';
    }

    public function renderDropdownNav($items)
    {
        $html = '<ul class="nav">';

        foreach ($items as $value) {
            $html .= $this->renderItem($value);
        }

        $html .= '</ul>';

        return $html;
    }

    public function renderSubNav($items = [], $type = 'dropdown')
    {
        if ($type || $type === 'mega') {
            return $this->renderMegaNav($items);
        }

        return $this->renderDropdownNav($items);
    }
}
