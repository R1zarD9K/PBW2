<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [                
        'namaKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi',
    ];
}
// Nama:Rahmat Pratami
// Kelas:D3IF-46-03
// NIM:6706223136
