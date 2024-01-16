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
            $validatedData = $request->validate([
                'nama_lengkap_murid' => 'required|string',
                'alamat_rumah' => 'required|string',
                'nomor_telepon' => 'required|string',
                'tanggal_lahir' => 'required|date',
                'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
                'nama_orang_tua' => 'required|string',
                'email' => 'required|email',
                'asal_sekolah' => 'nullable|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            ]);

            $validatedData['is_verified'] = false;
    
            // Simpan data ke dalam database
            Pendaftaran::create($validatedData);

            return redirect()->route('success');
        }
}
