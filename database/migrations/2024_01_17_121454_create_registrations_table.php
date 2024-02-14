<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('package_id');       
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('nomor_validasi');
            $table->string('ktp');
            $table->string('kk');
            $table->string('akta_kelahiran');
            $table->string('ijazah');
            $table->string('foto_selfie');
            $table->string('akta_nikah');
            $table->date('tanggal_keberangkatan');
            $table->integer('status');//0=Ditolak, 1=Pengajuan, 2=Disetujui
            $table->string('alasan_penolakan')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('package_id')->references('id')->on('packages');
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
        Schema::dropIfExists('registrations');
    }
}
