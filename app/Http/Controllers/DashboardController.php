<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Report;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(): View
    {
        $users = count(User::whereNot('id', 1)->get());
        $articles = count(Article::all());
        $categories = count(Category::all());
        $reports = Report::all();
        return view('backend.pages.dashboard', compact('users', 'articles', 'categories', 'reports'));
    }
}
