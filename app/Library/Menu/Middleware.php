<?php

namespace App\Library\Menu;

use Closure;
use Illuminate\Http\Request;
use Menus;

class Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        Menus::make('mainMenu', function ($menu) {
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

        return $next($request);
    }
}
