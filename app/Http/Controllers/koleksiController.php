<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class KoleksiController extends Controller
{
    public function index() {
        $koleksi = Collection::all();
        return view('koleksi.daftarKoleksi', compact('koleksi'));
    }

    // Nama:Rahmat Pratami
    // Kelas:D3IF-46-03
    // NIM:6706223136

    public function show($id)
    {
        $koleksi = Collection::findOrFail($id);
        return view('koleksi.infoKoleksi', compact('koleksi'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
    
    }
}