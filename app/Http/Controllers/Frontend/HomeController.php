<?php


namespace App\Http\Controllers\Frontend;


use App\Models\Article;
use App\Models\Categories;
use App\Repositories\ArticleRepository;

class HomeController
{
    /** @var  ArticleRepository */
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepo)
    {
        $this->articleRepository = $articleRepo;

    }

    public function index()
    {
        return view("frontend.home");
    }

    public function category($id)
    {
        $catecory = Categories::where(["id"=>$id])->orWhere(["slug"=>$id])->first();

        abort_if(!$catecory, 404);

        $articles = $this->articleRepository->findBuCategoriesAndStatus([$catecory->id], 1);

        return view("frontend.categories.index")->with("articles", $articles);
    }
    public function article($id)
    {
        $article = Article::with(["media","user","categories"])->where(['id'=>$id])->orWhere(['slug'=>$id])->first();

        abort_if(!$article, 404);

        return view("frontend.article.index")->with("article", $article);
    }
}
