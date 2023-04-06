<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kendaraan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kendaraan')->unique();
            $table->enum('jenis',['angkutan_barang','angkutan_orang']);
            $table->enum("status",['rusak','aktif','non_aktif','dipakai','diservice']);
            $table->enum("sewa",['true','false']);
            $table->date("tgl_akhir_service")->nullable();
            $table->date("tgl_service_selanjutnya")->nullable();
            $table->integer("jarak_service")->nullable();
            $table->string("satuan_jarak")->nullable();
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
