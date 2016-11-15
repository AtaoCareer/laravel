<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jbsq extends Model
{
    //
    use SoftDeletes;
    
    
    //修改默认的数据表名
    protected $table = "workers";
    //默认的情况插入数据是都要添加时间戳字段的，如果原来的设计的表里没有那个就不能创建了
    public $timestamps = false;
    
    protected $fillable = ['yinhangka'];
    
    protected $dates = ['deleted_at'];
}
