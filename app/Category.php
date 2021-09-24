<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'm_categories';

    public static function getLists()
    {
        $categories = Category::pluck('category_name', 'id');
        return $categories;
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

