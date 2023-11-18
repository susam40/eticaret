<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;


class KategoriController extends Controller
{
    public function index($slug_urunadi){
        $kategori = kategori::where('slug',$slug_urunadi)->firstOrFail();
        $alt_kategoriler = kategori::where('ust_id',$kategori->id)->get();
    
        return view('kategori',compact('kategori','alt_kategoriler'));
    }
    
}
