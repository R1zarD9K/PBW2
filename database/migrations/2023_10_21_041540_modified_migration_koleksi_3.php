<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Nama     : Rahmat Pratami
     * NIM      : 6706223136
     * Kelas    : 4603
     */
    public function up(): void
    {
        Schema::table('koleksi', function (Blueprint $table) {
            $table->integer('jumlahKeluar');
            $table->integer('jumlahSisa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('koleksi', function (Blueprint $table) {
            //
        });
    }
};
