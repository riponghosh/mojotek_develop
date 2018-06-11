<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $primaryKey = 'id';
    

    protected $table = 'sub_category';

    public function category()
    {
        return $this->hasOne('App\Category','id','category_id')->select('name');
    }
}
