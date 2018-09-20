<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'description'];

    protected $dates = ['deleted_at'];

    protected $fillable = ['picture', 'product_id'];

    public function product()
    {
        return $this->hasOne('App\Product');
    }
}
