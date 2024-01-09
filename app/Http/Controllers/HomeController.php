<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View
    {
        $articles = Article::orderBy('created_at', 'asc')
            ->limit(2)
            ->get();
        return view('frontend.pages.home', compact('articles'));
    }
}
