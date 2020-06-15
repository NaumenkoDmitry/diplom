<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Status
 * @package App\Models
 * @version June 11, 2020, 8:18 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $articles
 * @property string $name
 * @property string $description
 */
class Status extends Model
{
    public $table = 'statuses';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function articles()
    {
        return $this->hasMany(\App\Models\Article::class, 'status_id');
    }
}
