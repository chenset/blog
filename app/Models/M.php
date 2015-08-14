<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class M extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];//禁止批量更新的黑名单

    /**
     * 将created_at和updated_at机制的datetime格式转换为int格式
     * @param \DateTime|int $value
     * @return int|string
     */
    public function fromDateTime($value)
    {
        return strtotime(parent::fromDateTime($value));
    }
}