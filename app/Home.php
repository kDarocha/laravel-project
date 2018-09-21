<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'description'];
}
