<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return response()->success($articles, 'success');
    }

    public function store(ArticleRequest $request)
    {
        $article = Article::query()->create($request->validated());

        return response()->success($article, 'success');
    }


    public function show(Article $article)
    {
        return response()->success($article, 'success');
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->validated());
        return response()->success($article, 'success');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return response()->success(null, 'success');
    }


}
