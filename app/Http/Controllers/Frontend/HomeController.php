<?php


namespace App\Http\Controllers\Frontend;


use App\Models\Article;
use App\Models\Categories;
use App\Repositories\ArticleRepository;
use App\User;
use Illuminate\Http\Request;

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
        $latestPosts = Article::with(["media", "user", "categories"])->orderByDesc("created_at")->limit(10)->get();
        $popularArticles = Article::with(["media", "user", "categories"])->orderBy("view_count")->limit(3)->get();
        return view("frontend.home")
            ->with('latestPosts', $latestPosts)
            ->with("popularArticles", $popularArticles);
    }

    public function category($id)
    {
        $catecory = Categories::where(["id" => $id])->orWhere(["slug" => $id])->first();

        abort_if(!$catecory, 404);

        $articles = $this->articleRepository->findBuCategoriesAndStatus([$catecory->id], 1);

        return view("frontend.categories.index")->with("articles", $articles);
    }

    public function article($id)
    {
        $article = Article::with(["media", "user", "categories"])->where(['id' => $id])->orWhere(['slug' => $id])->first();

        abort_if(!$article, 404);

        $article->view_count++;
        $article->save();

        return view("frontend.article.index")->with("article", $article);
    }

    public function search(Request $request)
    {
        $filter = $request->get("filter", "");
        $user_id = $request->get("user", null);
        $searchTitle = "Результаты поиска по запросу '$filter'";
        $articleQuery = Article::with(["media", "user", "categories"]);
        if ($filter) {
            $articleQuery
                ->where("title", "like", "%$filter%")
                ->orWhere("short_text", "like", "%$filter%")
                ->orWhere("text", "like", "%$filter%");
        }
        if ($user_id &&  $user = User::find($user_id)) {
            $searchTitle = "Публикации пользователя {$user->name}";
            $articleQuery->where("user_id", "=", $user_id);
        }

        return view("frontend.search.index")
            ->with("articles", $articleQuery->paginate())
            ->with('searchTitle', $searchTitle);
    }

    public function contacts(Request $request)
    {
        return view("frontend.contacts.index");
    }
}
