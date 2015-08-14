<?php namespace App\Models;

class Article extends M
{
    protected $guarded = ['id', 'created_at', 'updated_at'];//禁止批量更新的黑名单
}
