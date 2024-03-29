<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalog extends Model
{

    use HasFactory;

    protected $fillable = ['name_c'];

    public function books(){
        return $this->hasMany('App\Models\Book', 'catalog_id');
    }
}
