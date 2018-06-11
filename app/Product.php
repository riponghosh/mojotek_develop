<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id';
    

    protected $table = 'product';

    public function category()
    {
        return $this->hasOne('App\Category','id','category_id');
    }

    public function subcategory()
    {
        return $this->hasOne('App\SubCategory','id','subcategory_id');
    }
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }

    public function product_image(){
        return $this->hasMany('App\ProductImage','product_id');
    }
}
