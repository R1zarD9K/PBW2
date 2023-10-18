<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('collection', function (Blueprint $table) {
            $table->integer('id', 11);
            $table->string('namaKoleksi', 100);
            $table->tinyInteger('jenisKoleksi');
            $table->date('createdAt')->nullable();
            $table->integer('jumlahKoleksi');    
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
