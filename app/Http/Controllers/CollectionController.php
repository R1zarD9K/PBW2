<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class collectionController extends Controller
{
    public function index()
    {
        $collections = DB::table('collections')
        ->select(
            'id as id',
            'namaKoleksi as judul',
            DB::raw('
            (CASE
            WHEN jenisKoleksi="1" THEN "Buku"
            WHEN jenisKoleksi="2" THEN "Majalah"
            WHEN jenisKoleksi="3" THEN "Cakram Digital"
            END) AS jenis
            '),
            'jumlahAwal as jumlahAwal',
            'jumlahSisa as jumlahSisa',
            'jumlahKeluar as jumlahKeluar'
        )
        ->orderBy('namaKoleksi', 'asc')
        ->get();

        return view('koleksi.daftarKoleksi', compact('collections'));
    }

    public function create(){
        return view('koleksi.registrasi');
    }

    public function update(Request $request, $id){
        // dd($request->all());
        $request->validate([
            'jenis' =>['required', 'gt:0'],
            'jumlahSisa' =>['required', 'gt:0'],
            'jumlahKeluar' =>['required', 'gt:0']
               ]);
    
           DB::table('collections')
           ->where('id', "=",$request->id)
           ->update([
            'jenisKoleksi' => $request->jenis,
            'jumlahSisa' => $request->jumlahSisa,
            'jumlahKeluar' => $request->jumlahKeluar
           ]);

        return redirect()->route('koleksi');
    }

    public function store(Request $request){
        $request->validate([
            'namaKoleksi' =>['required', 'string', 'max:255'],
            'jenisKoleksi' =>['required', 'numeric'],
            'jumlahKoleksi' =>['required', 'numeric'],
            'create_at' => ['required', 'date', 'max:255']
           ],
        [
            'nama.unique' => 'Nama koleksi tersebut sudah ada'
        ]);
    
           $collections = Collection::create([
            'namaKoleksi' => $request -> namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlahAwal' => $request->jumlahKoleksi,
            'jumlahSisa' => $request->jumlahKoleksi,
            'jumlahKeluar' => 0,
            'create_at' => Carbon::now()
           ]);
        return view ('koleksi.daftarKoleksi');
    }

    public function show($id)
    {

        $collections = Collection::findorFail($id);
        return view('koleksi.infoKoleksi', compact('collections'));
    }

    public function edit($id)
    {
        $collections = Collection::findorFail($id);
        return view('koleksiEdit', compact('collections'));
    }

    public function destroy($id)
    {
        $collections = Collection::findorFail($id);
        $collections->delete();
        return redirect()->route('koleksi.daftarKoleksi');
    }

    public function getAllCollections() {
        $collections = DB::table('collections')
        ->select(
            'id as id',
            'namaKoleksi as judul',
            DB::raw('
            (CASE
            WHEN jenisKoleksi="1" THEN "Buku"
            WHEN jenisKoleksi="2" THEN "Majalah"
            WHEN jenisKoleksi="3" THEN "Cakram Digital"
            END) AS jenis
            '),
            'jumlahAwal as jumlahAwal',
            'jumlahSisa as jumlahSisa',
            'jumlahKeluar as jumlahKeluar'
        )
        ->orderBy('namaKoleksi', 'asc')
        ->get();

        return DataTables::of($collections)
        ->addColumn('action', function ($collection){
            $html = '
            <a href="' . url('koleksiView', $collection->id) .'" data-rowid="" class="btn btn-xs btn-light" data-toggle="tooltip" data-placement="top"
                data-container="body" title="Edit Koleksi" onclick="infoKoleksi('."'".$collection->id."'".')">
            <i class="fa fa-edit"></i>
            ';
            return $html;
        })
        ->make(true);
    }
}
