<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use App\User;
use App\Pendaftaran;

class GuestController extends Controller
{
    public function index(){
        return view('guest.index');
    }

    public function facilites(){
        return view('guest.facilities');
    }

    public function gallery(){
        return view('guest.gallery');
    }
    // smk
    public function smk(){
        return view('guest.smk.smk');
    }

    public function gallery_smk(){
        return view('guest.smk.gallery_tkj');
    }

    public function gallery_tbsm(){
        return view('guest.smk.gallery_tbsm');
    }

    public function gallery_akl(){
        return view('guest.smk.gallery_akl');
    }

    public function smp(){
        return view('guest.smp.smp');
    }

    public function ut(){
        return view('guest.ut.ut');
    }

    public function pendaftaran(Request $request){
        // $validate = Validator::make($request->all(), [
        //     "keahlian" => ['required', 'string'],
        //     "nama_lengkap" => ['required', 'string'],
        //     "nama_panggilan" => ['required', 'string'],
        //     "jenis_kelamin" => ['required', 'string'],
        //     "tempat_lahir" => ['required', 'string'],
        //     "tanggal_lahir" => ['required'],
        //     "agama" => ['required', 'string'],
        //     "kewarganegaraan" => ['required', 'string'],
        //     "jumlah_keluarga_kandung" => ['required'],
        //     "jumlah_keluarga_tiri" => ['required'],
        //     "jumlah_keluarga_angkat" => ['required'],
        //     "olah_raga" => ['required', 'string'],
        //     "organisasi" => ['required', 'string'],
        //     "nama_ayah" => ['required', 'string'],
        //     "tempat_lahir_ayah" => ['required', 'string'],
        //     "tanggal_lahir_ayah" => ['required'],
        //     "agama_ayah" => ['required'],
        //     "kewarganegaraan_ayah" => ['required'],
        //     "pendidikan_terakhir_ayah" => ['required', 'string'],
        //     "pekerjaan_ayah" => ['required', 'string'],
        //     "alamat_ayah" => ['required', 'string'],
        //     "nama_ibu" => ['required', 'string'],
        //     "tempat_lahir_ibu" => ['required', 'string'],
        //     "tanggal_lahir_ibu" => ['required'],
        //     "agama_ibu" => ['required'],
        //     "kewarganegaraan_ibu" => ['required'],
        //     "pendidikan_terakhir_ibu" => ['required', 'string'],
        //     "pekerjaan_ibu" => ['required', 'string'],
        //     "alamat_ibu" => ['required', 'string'],
        // ]);

        // if($validate->fails()){
        //     return response()->toJson();
        // }

        DB::table('pendaftarans')->insert([
            "id" => Uuid::uuid4()->toString(),  
            "keahlian" => $request->keahlian,
            "nama_lengkap" => $request->nama_lengkap,
            "nama_panggilan" => $request->nama_panggilan,
            "jenis_kelamin" => $request->jenis_kelamin,
            "tempat_lahir" => $request->tempat_lahir,
            "agama" => $request->agama,
            "kewarganegaraan" => $request->kewarganegaraaan,
            "jumlah_keluarga_kandung" => $request->jumlah_keluarga_kandung,
            "jumlah_keluarga_tiri" => $request->jumlah_keluarga_tiri,
            "jumlah_keluarga_angkat" => $request->jumlah_keluarga_angkat,
            "status" => $request->status,
            "kesenian" => $request->kesenian,
            "olah_raga" => $request->olah_raga,
            "organisasi" => $request->organisasi,
            "lain_lain" => $request->lain_lain,
            "nama_ayah" => $request->nama_ayah,
            "tempat_lahir_ayah" => $request->tempat_lahir_ayah,
            "tanggal_lahir_ayah" => $request->tanggal_lahir_ayah,
            "agama_ayah" => $request->agama_ayah,
            "kewarganegaraan_ayah" => $request->kewarganegaraan_ayah,
            "pendidikan_terakhir_ayah" => $request->pendidikan_terakhir_ayah,
            "pekerjaan_ayah" => $request->pekerjaan_ayah,
            "penghasilan_ayah" => $request->penghasilan_ayah,
            "alamat_ayah" => $request->alamat_ayah,
            "nama_ibu" => $request->nama_ibu,
            "tempat_lahir_ibu" => $request->tempat_lahir_ibu,
            "tanggal_lahir_ibu" => $request->tanggal_lahir_ibu,
            "agama_ibu" => $request->agama_ibu,
            "kewarganegaraan_ibu" => $request->kewarganegaraan_ibu,
            "pendidikan_terakhir_ibu" => $request->pendidikan_terakhir_ibu,
            "pekerjaan_ibu" => $request->pekerjaan_ibu,
            "penghasilan_ibu" => $request->penghasilan_ibu,
            "alamat_ibu" => $request->alamat_ibu,
            "nama_wali" => $request->nama_wali,
            "tempat_lahir_wali" => $request->tempat_lahir_wali,
            "tanggal_lahir_wali" => $request->tanggal_lahir_wali,
            "agama_wali" => $request->agama_wali,
            "kewarganegaraan_wali" => $request->kewarganegaraan_wali,
            "pendidikan_terakhir_wali" => $request->pendidikan_terakhir_wali,
            "pekerjaan_wali" => $request->pekerjaan_wali,
            "penghasilan_wali" => $request->penghasilan_wali,
            "alamat_wali" => $request->alamat_wali,
        ]);

        
    }
}
