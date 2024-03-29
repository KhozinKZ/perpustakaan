<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;


   protected $fillable = ['name_a','email','phone_number','address'];

    public function books(){
        return $this->hasMany('App\Models\Book', 'author_id');
    }
}
