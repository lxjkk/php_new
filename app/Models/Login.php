<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
