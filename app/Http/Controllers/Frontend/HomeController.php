<?php


namespace App\Http\Controllers\Frontend;


use App\Models\Article;

class HomeController
{
    public function index()
    {
        return view("frontend.home");
    }

    public function category($id)
    {
        $articles = Article::with(["media"])->get();

        return view("frontend.categories.index")->with("articles", $articles);
    }
    public function article($id)
    {
        $article = Article::with(["media","user","categories"])->find($id);

        return view("frontend.article.index")->with("article", $article);
    }
}
