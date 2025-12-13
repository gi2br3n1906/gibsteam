<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->get();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        // Check if article is published
        if (!$article->published_at || $article->published_at->isFuture()) {
            abort(404);
        }

        return view('articles.show', compact('article'));
    }
}
