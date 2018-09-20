<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsPhoto extends Model
{
    protected $fillable = ['product_id', 'picture'];

    public function product()
    {
        return $this->hasOne('App\Product');
    }
}
