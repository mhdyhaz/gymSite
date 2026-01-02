<?php

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository
{
    public function getAllPaginated($perPage = 10)
    {
        return Article::latest()->paginate($perPage);
    }

    public function findBySlug($slug)
    {
        return Article::where('slug', $slug)->firstOrFail();
    }

    public function store(array $data)
    {
        return Article::create($data);
    }

    public function update(Article $article, array $data)
    {
        return $article->update($data);
    }

    public function delete(Article $article)
    {
        return $article->delete();
    }
}
