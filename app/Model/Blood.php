<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    protected $table = 'bedonars';
    public $timestamps = false;

    protected $guarded = [];
}
