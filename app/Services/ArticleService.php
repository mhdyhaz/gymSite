<?php

namespace App\Services;

use App\Repositories\ArticleRepository;
use App\Models\Article;

class ArticleService
{
    protected $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function getArticles($perPage = 10)
    {
        return $this->articleRepository->getAllPaginated($perPage);
    }

    public function getArticleBySlug($slug)
    {
        return $this->articleRepository->findBySlug($slug);
    }

    public function createArticle(array $data)
    {
        
        if (!isset($data['slug'])) {
            $data['slug'] = str()->slug($data['title']);
        }

        return $this->articleRepository->store($data);
    }

    public function updateArticle(Article $article, array $data)
    {
        return $this->articleRepository->update($article, $data);
    }

    public function deleteArticle(Article $article)
    {
        return $this->articleRepository->delete($article);
    }
}
