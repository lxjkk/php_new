<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BolgsTable
 *
 * @property int $id
 * @property string $content
 * @property int $like
 * @property int $collect
 * @property string $content_title
 * @property string $content_subhead
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BolgsTable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BolgsTable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BolgsTable query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BolgsTable whereCollect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BolgsTable whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BolgsTable whereContentSubhead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BolgsTable whereContentTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BolgsTable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BolgsTable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BolgsTable whereLike($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BolgsTable whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BolgsTable extends Model
{
    //
    /**
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ApiUser query()
    */
    protected $table = 'bolgs_table';
    protected $primaryKey = 'id';
    public $timestamps = ['created_at', 'updated_at'];
}
