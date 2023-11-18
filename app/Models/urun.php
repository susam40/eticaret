<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urun extends Model
{
    protected $table = 'urun';
    public $timestamps = false;
    
    public function kategoriler(){
        return $this->belongsToMany('App\Models\kategori','kategori_urun');
        // ürüne ait kategoriler bu şekilde çekilir.
        
    }
}


