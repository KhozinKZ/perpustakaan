<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{

   use HasFactory;

   protected $fillable = ['name_p','email','phone_number','address'];

     public function books(){
        return $this->hasMany('App\Models\Book', 'publisher_id');
    }
}
