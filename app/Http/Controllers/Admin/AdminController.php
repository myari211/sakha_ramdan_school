<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pendaftaran;
use App\HomeImage;

class AdminController extends Controller
{
    public function dashboard() {
        $pendaftaran_total = Pendaftaran::count();

        return view('admin.dashboard', compact('pendaftaran_total'));
    }

    public function pendaftar() {
        $pendaftar = Pendaftaran::get();

        return view('admin.pendaftar', compact('pendaftar'));
    }

    public function pendaftar_details($id){
        
        $pendaftar = DB::table('pendaftarans')->where('id', $id)->get();

        return view('admin.pendaftar_details', compact('pendaftar'));
    }

    public function home(){

        $home = DB::table('home_images')->count();

        return view('admin.home_change', compact('home'));
    }

    public function home_upload(Request $request){
        $this->validate($request, [
            'file' => ['string', 'required'],
        ]);

        $file = $request->file('file');

        $fileName = time()."_".$file->getClientOriginalName();

        $target = "img";
        $file->move($target, $fileName);
        
        dd($fileName);

        DB::table('home_images')->insert([
            'name_of_image' => $fileName,
            'keterangan' => $request->keterangan,    
        ]);

        return back();
    }
}
