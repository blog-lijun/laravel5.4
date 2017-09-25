<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    //use SoftDeletes;      开启软删除
    /**
     * 需要被转换成日期的属性。
     *
     * @var array
     */
    //protected $dates = ['deleted_at'];

    protected $table = 'users';
    protected $primakey = 'id';
    public $timestamps  = true;

    //protected $fillable = ['name'];   //可以批量赋值的属性; $guarded 相反;
}
