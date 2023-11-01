<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    // Nama    : Rahmat Pratami
    // NIM     : 6706223136
    // Kelas   : D3IF-4603
    protected $table = 'transaksi';
    
    protected $fillable = [
        'idPetugas',
        'idPeminjam',
        'tanggalPinjam',
        'tanggalSelesai'
    ];
    public function petugas()
    {
        return $this->belongsTo(User::class, 'idPetugas');
    }
    public function peminjam()
    {
        return $this->belongsTo(User::class, 'idPeminjam');
    }
}