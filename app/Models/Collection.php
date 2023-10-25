<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable = [
        'id',
        'namaKoleksi',
        'jenisKoleksi',
        'create_at',
        'jumlahAwal',
        'jumlahSisa',
        'jumlahKeluar',

    ];
}
