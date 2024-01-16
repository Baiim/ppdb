<?php

namespace App\Http\Controllers;
use App\Models\Pendaftaran;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }
    public function jadwal()
    {
        return view('pages.jadwal');
    }
    public function prosedur()
    {
        return view('pages.prosedur');
    }

    public function pendaftar(){
        return view('pages.pendaftaran');
    }

    public function pengumuman(){
        $pendaftarans = Pendaftaran::all(); // Mengambil semua data pendaftaran

        return view('pages.pengumuman', compact('pendaftarans'));

    }

    public function success(){
        return view('pages.success');
    }
}
