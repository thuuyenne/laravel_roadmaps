<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cate_customer extends Model
{
    protected $table='cate_customer';
    public $timestamps = false;

    public function users() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasMany('App\Models\users','cate_customer_ID','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
