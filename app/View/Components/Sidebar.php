<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $routeName = Route::currentRouteName();
        $menus = [
            [
                'label'=> 'User Management',
                'icon' => 'fa-users',
                'url' => 'user',
                'url_list' => 'user.index',
                'url_create' => 'user.create',
            ],
            [
                'label'=> 'Article Management',
                'icon' => 'fa-newspaper',
                'url' => 'article',
                'url_list' => 'article.index',
                'url_create' => 'article.create',
            ],
            [
                'label'=> 'Category Management',
                'icon' => 'fa-list',
                'url' => 'category',
                'url_list' => 'category.index',
                'url_create' => 'category.create',
            ],
        ];
        return view('components.sidebar', compact('routeName', 'menus'));
    }
}
