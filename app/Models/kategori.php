<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    public $timestamps = false; //Modeliyle ilgili bir kullanıcı oluşturulduğunda veya güncellendiğinde created_at ve updated_at sütunları değişmeyecek ve bu sütunlar veritabanında bulunmayacaktır.

    public function urunler(){
        return $this->belongsToMany('App\Models\urun','kategori_urun');
        // Bu satır, "kategori" modeli ile "urun" modeli arasında bir çoktan çok ilişki kurar
        
    }
}
