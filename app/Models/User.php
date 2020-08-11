<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $name 用户名
 * @property string $phone 手机号码
 * @property \Illuminate\Support\Carbon|null $created_at 创建时间
 * @property \Illuminate\Support\Carbon|null $updated_at 更新时间
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends BaseModel
{
    //
    protected $table = 'users';
    protected $casts = [
        'updated_at' => 'datetime:Y-m-d',
        'created_at' => 'datetime:Y-m-d H:i:s',
    ];
}
