<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\AppBaseController;
use App\Models\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Support\Facades\DB;
class DashboardController extends AppBaseController
{
    protected $articleRepository;
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function index()
    {
        $articleStat = collect(DB::select('SELECT count(id) as `data` FROM diplom_blog.articles where year(created_at) = "2019" group by month(created_at)'))->pluck('data')->all();

        return view("dashboard.index")->with(
            'stat', ['articles' => $articleStat]
        )->with("unapproved", $this->articleRepository->unapproved());
    }

}
