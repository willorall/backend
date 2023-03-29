<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pemesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user_yang_pinjam');
            $table->integer('id_kendaraan');
            $table->integer('jarak');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->integer('id_user_persetujuan_1');
            $table->integer('id_user_persetujuan_2');
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
