<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('namaKoleksi',100);
            $table->tinyinteger('jenisKoleksi');
            $table->date('create_at')->nullable();
            $table->integer('jumlahAwal');
            $table->integer('jumlahSisa');
            $table->integer('jumlahKeluar');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collections');
    }
};
