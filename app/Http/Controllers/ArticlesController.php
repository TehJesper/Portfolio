<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect(route('articles.show', $article));
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('articles.index'));
    }
    public function random()
    {
        $test = factory(\App\Article::class)->create();
        return redirect(route('articles.index'));
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }

}

