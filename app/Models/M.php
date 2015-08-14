<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class M extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];//��ֹ�������µĺ�����

    /**
     * ��created_at��updated_at���Ƶ�datetime��ʽת��Ϊint��ʽ
     * @param \DateTime|int $value
     * @return int|string
     */
    public function fromDateTime($value)
    {
        return strtotime(parent::fromDateTime($value));
    }
}