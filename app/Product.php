<?php

namespace App;

use App\Category;
use App\OrderDetail;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'm_products';
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
