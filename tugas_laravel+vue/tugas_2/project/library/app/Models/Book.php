<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

     // protected $fillable = ['id_pinjam','id_anggota','tgl_pinjam','tgl_kembali'];
     protected $fillable = ['isbn','title','year','publisher_id','author_id','catalog_id','qty','price'];

     
    //  public function publisher(){
    //     return $this->belongsTo('App\Models\publisher', 'publisher_id');
    // }

     public function catalog(){
        return $this->belongsTo('App\Models\catalog', 'catalog_id');
    }

    //   public function author(){
    //     return $this->belongsTo('App\Models\author', 'author_id');
    // }
}
