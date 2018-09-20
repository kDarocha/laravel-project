<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'subtitle', 'infos'];
}
