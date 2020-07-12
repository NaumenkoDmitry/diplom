<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\AppBaseController;
use App\Models\Article;
use App\Repositories\ArticleRepository;
use App\Repositories\FeedbackRepository;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;

class DashboardController extends AppBaseController
{
    protected $articleRepository;
    protected $feedbackRepository;
    public function __construct(ArticleRepository $articleRepository, FeedbackRepository $feedbackRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->feedbackRepository = $feedbackRepository;
    }

    public function index()
    {
        $articleStat = collect(DB::select('SELECT count(id) as `data` FROM diplom_blog.articles where year(created_at) = "2019" group by month(created_at)'))->pluck('data')->all();

        return view("dashboard.index")
            ->with('stat', ['articles' => $articleStat])
            ->with("unapproved", $this->articleRepository->unapproved())
            ->with("feedbacks", $this->feedbackRepository->getUnProcessed());
    }

}
