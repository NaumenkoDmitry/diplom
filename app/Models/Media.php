<?php

namespace App\Models;

use App\User;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Media
 * @package App\Models
 * @version June 12, 2020, 4:39 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $articles
 * @property string $name
 * @property string $title
 * @property string $src
 * @property string $description
 */
class Media extends Model
{
    public $table = 'medias';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'name',
        'title',
        'src',
        'description',
        'media_types_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'title' => 'string',
        'src' => 'string',
        'description' => 'string',
        'media_types_id'=>'integer',
        'user_id'=>'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'file'=>"exclude_if:media_types_id,2|image|required",
        'src'=>"exclude_if:media_types_id,1|required|string"
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function articles()
    {
        return $this->belongsToMany(\App\Models\Article::class, 'article_media');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
