<?php

namespace PackageSkeleton\Http\Controllers;

use PackageSkeleton\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('package-skeleton::articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        $comments = $article->comments()->whereNull('parent_id')->with('replies')->get();
        return view('package-skeleton::articles.show', compact('article', 'comments'));
    }

    public function create()
    {
        return view('package-skeleton::articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Article::create($validated);

        return redirect()->route('articles.index');
    }
}