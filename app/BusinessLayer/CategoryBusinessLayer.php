<?php

namespace App\BusinessLayer;

use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;
class CategoryBusinessLayer
{

    public function getAll(): LengthAwarePaginator
    {
        return Category::select('id', 'name', 'slug')->paginate(100);
    }

    public function store($request)
    {
        Category::create([
            'name' => $request['name'],
            'slug' => Str::slug($request['name'])
        ]);
    }

    public function update($request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'name' => $request['name'],
            'slug' => Str::slug($request['name'])
        ]);
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete($id);
    }
}
