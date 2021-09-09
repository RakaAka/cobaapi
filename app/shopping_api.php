<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shopping_api extends Model
{
    //
    protected $table = 'user_api';
    protected $fillable = ['name','created_at', 'updated_at'];
}
