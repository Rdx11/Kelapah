<?php

namespace App\Http\Controllers;

use App\BusinessLayer\ArticleBusinessLayer;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articleBusinessLayer;

    public function __construct(ArticleBusinessLayer $articleBusinessLayer)
    {
        $this->articleBusinessLayer = $articleBusinessLayer;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $articles = $this->articleBusinessLayer->getAll();
        return view('backend.pages.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::select('id', 'name')->get();
        return view('backend.pages.article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request): RedirectResponse
    {
        $this->articleBusinessLayer->store($request->validated());
        return redirect(route('article.index'))->with('success', 'article was created');
    }

    /**
     * Display the specified resource.
     */
    public function show($request)
    {
        $article = $this->articleBusinessLayer->getData($request);
        return view('frontend.pages.detail-article', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article): View
    {
        $categories = Category::select('id', 'name')->get();
        return view('backend.pages.article.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, $id)
    {
        $this->articleBusinessLayer->update($request->validated(), $id);
        return redirect(route('article.index'))->with('success', 'article was updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $this->articleBusinessLayer->delete($id);
        return redirect(route('article.index'))->with('success', 'article was deleted');
    }

    public function listArticle()
    {
        $categories = Category::select('id', 'name')->get();
        
        $checked = request()->get('filter-article');

        if ($checked) {
            $categoryNames = Category::whereIn('name', $checked)->pluck('name')->toArray();
            $articles = Article::whereHas('category', function ($query) use ($categoryNames) {
                $query->whereIn('name', $categoryNames);
            })->paginate(5);
        } else {
            $articles = $this->articleBusinessLayer->getAll();
        }

        return view('frontend.pages.article', compact('articles', 'categories'));
    }
}
