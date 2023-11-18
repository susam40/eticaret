<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
         DB::table('kategori')->truncate(); // Laravel'da bir veritabanı tablosundaki tüm kayıtları silmek için kullanılır. 
         $id=DB::table('kategori')->insertGetId(['kategori_adi'=>'Elektronik','slug'=>'elektronik']); //alt kategoridekilerin id'lerini almak için id değerine eşitledik.
         DB::table('kategori')->insert(['kategori_adi'=>'Bilgisayar/Tablet','slug'=>'bilgisayar-tablet','ust_id'=>$id]);
         
         $kitap=DB::table('kategori')->insertGetId(['kategori_adi'=>'Kitap','slug'=>'kitap']);
         DB::table('kategori')->insert(['kategori_adi'=>'Defter','slug'=>'defter','ust_id'=>$kitap]);

         DB::table('kategori')->insert(['kategori_adi'=>'Tatlı','slug'=>'Waffle']);
         DB::table('kategori')->insert(['kategori_adi'=>'Kıyafet','slug'=>'Tişört']);
         DB::table('kategori')->insert(['kategori_adi'=>'Bilgisayar','slug'=>'MSİ']);
         DB::table('kategori')->insert(['kategori_adi'=>'Anne-Çocuk','slug'=>'Beşik']);
         DB::table('kategori')->insert(['kategori_adi'=>'Tablet','slug'=>'Samsung']);
         DB::table('kategori')->insert(['kategori_adi'=>'Takım','slug'=>'Elbise']);
    }
}
