<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Feedback
 * @package App\Models
 * @version July 10, 2020, 7:38 pm UTC
 *
 * @property string $message
 * @property string $name
 * @property string $email
 * @property string $text
 * @property integer $status
 */
class Feedback extends Model
{

    public $table = 'feedbacks';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'message',
        'name',
        'email',
        'text',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'message' => 'string',
        'name' => 'string',
        'email' => 'string',
        'text' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'message' => 'required',
        'name' => 'required',
        'email' => 'required',
        //'status' => 'required'
    ];


}
