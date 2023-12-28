<?php

namespace App\BusinessLayer;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;
class ArticleBusinessLayer
{

    public function getAll(): LengthAwarePaginator
    {
        return Article::exclude(['created_at', 'updated_at'])->with(['user', 'category'])->paginate(100);
    }

    public function store($request): void
    {
        Article::create([
            'category_id' => $request['category'],
            'user_id' => auth()->user()->id,
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'content' => $request['content'],
            'status' => $request['status'],
            'slug' => Str::slug($request['title']),
        ]);
    }

    public function update($request, $id): void
    {
        $article = Article::find($id);
        $article->update([
            'category_id' => $request['category'],
            'user_id' => auth()->user()->id,
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'content' => $request['content'],
            'status' => $request['status'],
            'slug' => Str::slug($request['title']),
        ]);
    }

    public function delete($id)
    {
        $category = Article::find($id);
        $category->delete($id);
    }
}
