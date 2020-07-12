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
 * Class Article
 *
 * @package App\Models
 * @version June 11, 2020, 8:21 pm UTC
 * @property \App\Models\Status $status
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $categories
 * @property \Illuminate\Database\Eloquent\Collection $media
 * @property string $title
 * @property string $short_text
 * @property string $text
 * @property integer $status_id
 * @property integer $user_id
 * @property int $id
 * @property string $slug
 * @property int|null $comment_id
 * @property int|null $view_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read int|null $categories_count
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereShortText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Article whereViewCount($value)
 */
	class Article extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Categories
 *
 * @package App\Models
 * @version June 15, 2020, 7:05 pm UTC
 * @property \Illuminate\Database\Eloquent\Collection $articles
 * @property string $name
 * @property string $description
 * @property integer $visible
 * @property int $id
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read int|null $articles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Categories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Categories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Categories query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Categories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Categories whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Categories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Categories whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Categories whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Categories whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Categories whereVisible($value)
 */
	class Categories extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Comment
 *
 * @package App\Models
 * @version July 8, 2020, 2:40 pm UTC
 * @property string $puid
 * @property string $title
 * @property string $text
 * @property boolean $comment_approved
 * @property string $user_name
 * @property string $user_email
 * @property string $uid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereCommentApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment wherePuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereUserEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereUserName($value)
 */
	class Comment extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Media
 *
 * @package App\Models
 * @version June 12, 2020, 4:39 pm UTC
 * @property \Illuminate\Database\Eloquent\Collection $articles
 * @property string $name
 * @property string $title
 * @property string $src
 * @property string $description
 * @property int $id
 * @property int $media_types_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read int|null $articles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media whereMediaTypesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media whereSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Media whereUserId($value)
 */
	class Media extends \Eloquent {}
}

namespace App\Models{
/**
 * Class MediaTypes
 *
 * @package App\Models
 * @version June 15, 2020, 7:12 pm UTC
 * @property \Illuminate\Database\Eloquent\Collection $media
 * @property string $name
 * @property string $description
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MediaTypes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MediaTypes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MediaTypes query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MediaTypes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MediaTypes whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MediaTypes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MediaTypes whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MediaTypes whereUpdatedAt($value)
 */
	class MediaTypes extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Status
 *
 * @package App\Models
 * @version June 11, 2020, 8:18 pm UTC
 * @property \Illuminate\Database\Eloquent\Collection $articles
 * @property string $name
 * @property string $description
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read int|null $articles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereUpdatedAt($value)
 */
	class Status extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $is_admin
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

