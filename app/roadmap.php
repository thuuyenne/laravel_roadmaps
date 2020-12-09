<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roadmap extends Model
{
    protected $table='roadmaps';
    public $timestamps = false;

    public function users() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasMany('App\Models\users','roadmap_ID','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
