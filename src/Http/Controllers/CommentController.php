<?php

namespace PackageSkeleton\Http\Controllers;

use PackageSkeleton\Models\Article;
use PackageSkeleton\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $validated = $request->validate([
            'content' => 'required',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        $article->comments()->create($validated);

        return back();
    }
}