<?php

namespace App\Repositories;

use App\Models\Article;

/**
 * Class ArticleRepository
 * @package App\Repositories
 * @version June 11, 2020, 8:21 pm UTC
 */
class ArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'short_text',
        'text',
        'status_id',
        'user_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Article::class;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function unapproved()
    {
        return $this->allQuery()->with(['user',"status"])->where("status_id",'=',2)->get();
    }
    public function findBuCategoriesAndStatus($categories,  $statusId){
        if (!is_array($categories)){
            $categories = [$categories];
        }
        $articles = Article::with(["media"])
            ->where(["status_id"=>$statusId])
            ->whereHas('categories', function($query) use ($categories){
                $query->whereIn('categories.id', $categories);
            })
            ->get();
        return $articles;
    }
}
