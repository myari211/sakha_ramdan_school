<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = "pendaftarans";

    protected $fillable = [
        "keahlian",
        "nama_lengkap",
        "nama_panggilan",
        "jenis_kelamin",
        "tempat_lahir",
        "tanggal_lahir",
        "agama",
        "kewarganegaraan",
        "jumlah_keluarga_kandung",
        "jumlah_keluarga_tiri",
        "jumlah_keluarga_angkat",
        "status",
        "kesenian",
        "olahraga",
        "organisasi",
        "lain_lain",
        "nama_ayah",
        "tempat_lahir_ayah",
        "tanggal_lahir_ayah",
        "agama_ayah",
        "kewaganegaraan_ayah",
        "pendidikan_terakhir_ayah",
        "pekerjaan_ayah",
        "penghasilan_ayah",
        "alamat_ayah",
        "nama_ibu",
        "tempat_lahir_ibu",
        "tanggal_lahir_ibu",
        "agama_ibu",
        "kewarganegaraan_ibu",
        "pendidikan_terakhir_ibu",
        "pekerjaan_ibu",
        "penghasilan_ibu",
        "alamat_ibu",
        "nama_wali",
        "tempat_lahir_wali",
        "tanggal_lahir_wali",
        "agama_wali",
        "kewarganegaraan_wali",
        "pendidikan_terakhir_wali",
        "pekerjaan_wali",
        "penghasilan_wali",
        "alamat_wali",
    ];

    public $incrementing = false;
}
