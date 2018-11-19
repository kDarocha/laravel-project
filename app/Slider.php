<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'description'];

    protected $fillable = ['picture', 'product_id'];

    public function product()
    {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }
}
