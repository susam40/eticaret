<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index()
    {
        $kategoriler = kategori::whereRaw('ust_id is null')->take(8)->get(); // Retrieve the first 8 records from the "kategori" table
        //whereRaw('ust_id is null') - sadece üst kategorileri alır.
        return view('anasayfa', compact('kategoriler'));
    }
}
