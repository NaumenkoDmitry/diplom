<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Store
 * @package App\Models
 * @version January 4, 2020, 6:30 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection creditSlips
 * @property \Illuminate\Database\Eloquent\Collection debitSlips
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property string name
 */
class Store extends Model
{


    public $table = 'stores';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
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
    public function creditSlips()
    {
        return $this->hasMany(\App\Models\CreditSlip::class, 'store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function debitSlips()
    {
        return $this->hasMany(\App\Models\DebitSlip::class, 'store_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function products()
    {
        return $this->belongsToMany(\App\Models\Product::class, 'store_product');
    }
}
