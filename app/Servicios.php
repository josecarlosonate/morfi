<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $fillable = [
        'key', 'name','description',
    ];
}
