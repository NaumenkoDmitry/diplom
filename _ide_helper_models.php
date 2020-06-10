<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * Class CreditSlip
 *
 * @package App\Models
 * @version January 4, 2020, 6:31 pm UTC
 * @property \App\Models\Store store
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property integer store_id
 * @property int $id
 * @property int $store_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \App\Models\Store $store
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditSlip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditSlip newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CreditSlip onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditSlip query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditSlip whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditSlip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditSlip whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditSlip whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CreditSlip withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\CreditSlip withoutTrashed()
 */
	class CreditSlip extends \Eloquent {}
}

namespace App\Models{
/**
 * Class DebitSlip
 *
 * @package App\Models
 * @version January 4, 2020, 6:32 pm UTC
 * @property \App\Models\Store store
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property integer store_id
 * @property int $id
 * @property int $store_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \App\Models\Store $store
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DebitSlip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DebitSlip newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DebitSlip onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DebitSlip query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DebitSlip whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DebitSlip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DebitSlip whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DebitSlip whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DebitSlip withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\DebitSlip withoutTrashed()
 */
	class DebitSlip extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Product
 *
 * @package App\Models
 * @version January 4, 2020, 6:25 pm UTC
 * @property \Illuminate\Database\Eloquent\Collection creditSlips
 * @property \Illuminate\Database\Eloquent\Collection debitSlips
 * @property \Illuminate\Database\Eloquent\Collection stores
 * @property string name
 * @property integer height
 * @property integer width
 * @property integer length
 * @property number price
 * @property int $id
 * @property string $name
 * @property int $height
 * @property int $width
 * @property int $length
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CreditSlip[] $creditSlips
 * @property-read int|null $credit_slips_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DebitSlip[] $debitSlips
 * @property-read int|null $debit_slips_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Store[] $stores
 * @property-read int|null $stores_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Product onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereWidth($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Product withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Product withoutTrashed()
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Store
 *
 * @package App\Models
 * @version January 4, 2020, 6:30 pm UTC
 * @property \Illuminate\Database\Eloquent\Collection creditSlips
 * @property \Illuminate\Database\Eloquent\Collection debitSlips
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property string name
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CreditSlip[] $creditSlips
 * @property-read int|null $credit_slips_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DebitSlip[] $debitSlips
 * @property-read int|null $debit_slips_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Store onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Store whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Store withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Store withoutTrashed()
 */
	class Store extends \Eloquent {}
}

namespace App{
/**
 * App\Product
 *
 * @property int $id
 * @property string $name
 * @property int $height
 * @property int $width
 * @property int $length
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereWidth($value)
 */
	class Product extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

