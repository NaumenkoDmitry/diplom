<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Repositories\ArticleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ArticleController extends AppBaseController
{
    /** @var  ArticleRepository */
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepo)
    {
        $this->articleRepository = $articleRepo;

    }

    /**
     * Display a listing of the Article.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $this->articleRepository->with(['user','status','categories']);
        if ($request->has("filter")) {
            $filter = $request->filter;
            $articles = $this->articleRepository->allQuery()->orWhere('title','like', "%$filter%")->paginate(25);

        } else {
            $articles = $this->articleRepository->paginate(25);
        }

        return view('articles.index')
            ->with('articles', $articles);
    }

    /**
     * Show the form for creating a new Article.
     *
     * @return Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created Article in storage.
     *
     * @param CreateArticleRequest $request
     *
     * @return Response
     */
    public function store(CreateArticleRequest $request)
    {
        $input = $request->all();

        $article = $this->articleRepository->create($input);

        Flash::success('Article saved successfully.');

        return redirect(route('articles.index'));
    }

    /**
     * Display the specified Article.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $this->articleRepository->with(['user','status','media']);
        $article = $this->articleRepository->find($id);

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified Article.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $article = $this->articleRepository->find($id);

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified Article in storage.
     *
     * @param int $id
     * @param UpdateArticleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticleRequest $request)
    {
        $article = $this->articleRepository->find($id);

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }
        $mediaIds = $request->media;
        $article = $this->articleRepository->update($request->all(), $id);
        $article->media()->sync($mediaIds);
        Flash::success('Article updated successfully.');

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified Article from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $article = $this->articleRepository->find($id);

        if (empty($article)) {
            Flash::error('Article not found');

            return redirect(route('articles.index'));
        }

        $this->articleRepository->delete($id);

        Flash::success('Article deleted successfully.');

        return redirect(route('articles.index'));
    }
}
