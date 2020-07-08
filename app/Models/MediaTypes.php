<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MediaTypes
 * @package App\Models
 * @version June 15, 2020, 7:12 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $media
 * @property string $name
 * @property string $description
 */
class MediaTypes extends Model
{


    public $table = 'media_types';

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
    public function media()
    {
        return $this->hasMany(\App\Models\Media::class, 'media_types_id');
    }
}
