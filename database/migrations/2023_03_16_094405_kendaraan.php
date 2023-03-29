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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis',['angkutan_barang','angkutan_orang']);
            $table->string("email")->unique();
            $table->string("password")->unique();
            $table->string("id_departemen");
            $table->enum("status",['rusak','aktif','non_aktif','dipakai','diservice']);
            $table->enum("sewa",['true','false']);
            $table->date("tgl_akhir_service");
            $table->date("tgl_service_selanjutnya");
            $table->integer("jarak_service");
            $table->string("satuan_jarak");
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
