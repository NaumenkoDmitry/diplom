<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 * @package App\Models
 * @version July 8, 2020, 2:40 pm UTC
 *
 * @property string $puid
 * @property string $title
 * @property string $text
 * @property boolean $comment_approved
 * @property string $user_name
 * @property string $user_email
 */
class Comment extends Model
{

    public $table = 'comments';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'uid',
        'puid',
        'title',
        'text',
        'comment_approved',
        'user_name',
        'user_email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'uid' => 'string',
        'puid' => 'string',
        'title' => 'string',
        'text' => 'string',
        'comment_approved' => 'boolean',
        'user_name' => 'string',
        'user_email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'text'=>'required',
        'user_name' => 'required',
        'user_email' => 'required'
    ];

    public function comments(){
        return $this->hasMany(Comment::class,'puid', 'uid');
    }


}
