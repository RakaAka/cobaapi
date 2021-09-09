<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_api extends Model
{  
        public $timestamps = false;
        protected $table = 'user_api';
        protected $fillable = ['username','password','email','phone','country','city','postcode','name','address'];
}
