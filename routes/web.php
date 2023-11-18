<?php
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KullaniciController;
use App\Http\Controllers\OdemeController;
use App\Http\Controllers\SepetController;
use App\Http\Controllers\SiparislerController;
use App\Http\Controllers\UrunController;
Route::get('/',[AnasayfaController::class,'index'])->name('anasayfa');

Route::get('/kategori/{slug_kategoriadi}',[KategoriController::class,'index'])->name('kategori');
Route::get('/urun/{slug_urunadi}',[UrunController::class,'index'])->name('urun');
Route::get('/sepet',[SepetController::class,'index'])->name('sepet');
Route::get('/odeme',[OdemeController::class,'index'])->name('odeme');
Route::get('/siparisler',[SiparislerController::class,'index'])->name('siparisler');
Route::get('/siparisler/{id}',[SiparislerController::class,'detay'])->name('siparis');

Route::group(['prefix'=>'kullanici'],function(){
    Route::get('/oturumac',[KullaniciController::class,'giris_form'])->name('kullanici.oturumac');
    Route::get('/kaydol',[KullaniciController::class,'kaydol_form'])->name('kullanici.kaydol');
});
