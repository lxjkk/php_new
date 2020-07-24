<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Login
 *
 * @property int $id
 * @property int|null $accout
 * @property string|null $password
 * @property string|null $token
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Login newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Login newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Login query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Login whereAccout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Login whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Login wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Login whereToken($value)
 * @mixin \Eloquent
 */
class Login extends Model
{
    //
    /**
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApiUser query()
    */
    protected $table = 'login';
    protected $primaryKey = 'id';
    public $timestamps=false;
}
