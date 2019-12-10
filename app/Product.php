<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = ['product_name', 'product_description', 'product_value', 'product_quantity', 'alart_quantity','product_image'];

    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

}
