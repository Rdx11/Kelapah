<?php

namespace App\Http\Controllers;

use App\BusinessLayer\CategoryBusinessLayer;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryBusinessLayer;

    public function __construct(CategoryBusinessLayer $categoryBusinessLayer) {
        $this->categoryBusinessLayer = $categoryBusinessLayer;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categories = $this->categoryBusinessLayer->getAll();
        return view('backend.pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('backend.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        $this->categoryBusinessLayer->store($request->validated());
        return redirect(route('category.index'))->with('success', 'categroy has been created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, $id): RedirectResponse
    {
        $this->categoryBusinessLayer->update($request->validated(), $id);
        return redirect(route('category.index'))->with('success', 'category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $this->categoryBusinessLayer->delete($id);
        return redirect(route('category.index'))->with('success', 'category has been deleted');
    }
}
