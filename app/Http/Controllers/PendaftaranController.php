<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PendaftaranController extends Controller
{
    public function index(){
        return view('pages.admin.dashboard');
    }
    
    public function cetakData() {
        $pendaftar = Pendaftaran::all();
    
        $pdf = new Dompdf();
        $pdf->loadHtml(view('pages.admin.report.pendaftar', compact('pendaftar')));
    
        $pdf->setPaper('A4', 'landscape');
    
        $pdf->render();
    
        $pdf->stream("data_pendaftar.pdf");
    }
    public function store(Request $request)
        {
            $pendaftaran = Pendaftaran::create($request->all());;

            return redirect()->route('success');
        }
}
