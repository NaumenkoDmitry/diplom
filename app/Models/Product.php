<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version January 8, 2020, 6:11 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection creditSlips
 * @property \Illuminate\Database\Eloquent\Collection debitSlips
 * @property \Illuminate\Database\Eloquent\Collection stores
 * @property string name
 * @property string short_description
 * @property string description
 * @property integer height
 * @property integer width
 * @property integer length
 * @property number price
 */
class Product extends Model
{


    public $table = 'products';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'short_description',
        'description',
        'height',
        'width',
        'length',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'short_description' => 'string',
        'description' => 'string',
        'height' => 'integer',
        'width' => 'integer',
        'length' => 'integer',
        'price' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'height' => 'required',
        'width' => 'required',
        'length' => 'required',
        'price' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function creditSlips()
    {
        return $this->belongsToMany(\App\Models\CreditSlip::class, 'credit_slip_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function debitSlips()
    {
        return $this->belongsToMany(\App\Models\DebitSlip::class, 'debit_slip_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function stores()
    {
        return $this->belongsToMany(\App\Models\Store::class, 'store_product');
    }
}
