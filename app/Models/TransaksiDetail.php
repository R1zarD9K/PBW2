<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;
    // Nama    : Rahmat Pratami
    // NIM     : 6706223136
    // Kelas   : D3IF-4603
    protected $table = 'transaksi_detail';
    
    protected $fillable = [
        'id',
        'idTransaksi',
        'idKoleksi',
        'tanggalKembali',
        'status',
        'keterangan'
    ];
    public function koleksi()
    {
        return $this->belongsTo(Koleksi::class, 'idKoleksi');
    }
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'idTransaksi');
    }
}