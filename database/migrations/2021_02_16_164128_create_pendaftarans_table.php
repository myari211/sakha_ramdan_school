<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('keahlian');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->unsignedInteger('jumlah_keluarga_kandung');
            $table->unsignedInteger('jumlah_keluarga_tiri')->nullable();
            $table->unsignedInteger('jumlah_keluarga_angkat')->nullable();
            $table->string('status');
            $table->string('kesenian');
            $table->string('olah_raga');
            $table->string('organisasi')->nullable();
            $table->string('lain_lain')->nullable();
            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('agama_ayah');
            $table->string('kewarganegaraan_ayah');
            $table->string('pendidikan_terakhir_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('alamat_ayah');
            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('agama_ibu');
            $table->string('kewarganegaraan_ibu');
            $table->string('pendidikan_terakhir_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('alamat_ibu');
            $table->string('nama_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->date('tanggal_lahir_wali')->nullable();
            $table->string('agama_wali')->nullable();
            $table->string('kewarganegaraan_wali')->nullable();
            $table->string('pendidikan_terakhir_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
            $table->string('alamat_wali')->nullable();
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
        Schema::dropIfExists('pendaftarans');
    }
}
