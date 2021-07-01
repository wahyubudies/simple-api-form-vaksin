<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaksinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaksins', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pasien');
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->string('no_handphone');
            $table->string('email');
            $table->string('lokasi_pemeriksaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaksins');
    }
}
