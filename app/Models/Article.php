<?php

namespace App\Models;

use App\User;
use Eloquent as Model;
use Illuminate\Support\Str;

/**
 * Class Article
 * @package App\Models
 * @version June 11, 2020, 8:21 pm UTC
 *
 * @property \App\Models\Status $status
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $categories
 * @property \Illuminate\Database\Eloquent\Collection $media
 * @property string $title
 * @property string $short_text
 * @property string $text
 * @property integer $status_id
 * @property integer $user_id
 */
class Article extends Model
{
    public $table = 'articles';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            if (empty($user->slug)) {
                $user->slug = \Transliterate::slugify($user->title);
            }
        });
    }
    public $fillable = [
        'title',
        'short_text',
        'slug',
        'text',
        'status_id',
        'user_id',
        'view_count',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'short_text' => 'string',
        'text' => 'string',
        'status_id' => 'integer',
        'user_id' => 'integer',
        'view_count' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        //'slug'=>'required',
        'status_id' => 'required',
        'user_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function status()
    {
        return $this->belongsTo(\App\Models\Status::class, 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function categories()
    {
        return $this->belongsToMany(\App\Models\Categories::class, 'article_category','article_id', "category_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function media()
    {
        return $this->belongsToMany(\App\Models\Media::class, 'article_media');
    }
}
