<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
