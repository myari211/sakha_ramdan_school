<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pendaftaran;

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
}
