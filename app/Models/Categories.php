<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use ElForastero\Transliterate\Facade as Transliterate;

/**
 * Class Categories
 * @package App\Models
 * @version June 15, 2020, 7:05 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $articles
 * @property string $name
 * @property string $description
 * @property integer $visible
 */
class Categories extends Model
{

    public $table = 'categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected static function booted()
    {
        parent::boot();
        static::saving(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Transliterate::slugify($model->name);
            }
        });
    }





    public $fillable = [
        'name',
        'slug',
        'description',
        'visible'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'visible' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        //'slug'=> 'required',
        'visible' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function articles()
    {
        return $this->hasMany(\App\Models\Article::class, 'article_category');
    }
}
