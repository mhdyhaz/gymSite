<?php

namespace App\Http\Controllers;
use App\Http\Requests\ArticleRequest;
use App\Services\ArticleService;

class ArticleController extends Controller
{
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index()
    {
        $articles = $this->articleService->getArticles();
        return view('articles.index', compact('articles'));
    }

    public function store(ArticleRequest $request)
    {
        $article = $this->articleService->createArticle($request->validated());
    
        return redirect()->route('articles.show', $article->slug);
    }
    
}
