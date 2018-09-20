<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'description', 'content'];

    protected $dates = ['deleted_at'];

    public function productsPhotos()
    {
        return $this->hasMany('App\ProductsPhoto');
    }
}
