<?php

namespace App\View\Composers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use Menus;

class BackendSidebarComposer
{
    /**
     * Create a new profile composer.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('mainMenu', $this->registerNavigation());
    }

    public function registerNavigation()
    {
        return Menus::make('mainMenu', function ($menu) {
            $menu->add('Home', [
                'icon' => '<i class="bi bi-house"></i>',
                'link' => [
                    'url' => route('backend.home.index'),
                    'class' => '',
                ],
                'class' => '',
                'arrow' => '',
            ]);
            $menu->add('About', 'about');
            $menu->add('Services', 'services');
            $menu->add('Contact', 'contact');
        });
    }
}
