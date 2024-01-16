<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pendaftaran;
use Dompdf\Dompdf;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalMale = Pendaftaran::where('jenis_kelamin', 'Laki-Laki')->count();
        $totalFemale = Pendaftaran::where('jenis_kelamin', 'Perempuan')->count();
        $registrationsPerDay = Pendaftaran::selectRaw('DATE(created_at) as date, COUNT(*) as total')
        ->groupBy('date')
        ->get();    
        $totalUser = User::count();
        $totalPendaftar = Pendaftaran::count();

        return view('pages.admin.dashboard', [
            'totalMale' => $totalMale,
            'totalFemale' => $totalFemale,
            'registrationsPerDay' => $registrationsPerDay,
            'totalUser' => $totalUser,
            'totalPendaftar' => $totalPendaftar        
        ]);
    }
    public function user()
    {
        $user = User::all(); 
        return view('pages.admin.data.user', compact('user'));
    }
    public function pendaftar()
    {
        $pendaftar = Pendaftaran::all(); 
        return view('pages.admin.data.pendaftar', compact('pendaftar'));
    }

    public function ubahStatusVerifikasi($id)
    {
        $item = Pendaftaran::findOrFail($id);
    
        $item->is_verified = $item->is_verified === 1 ? 0 : 1;
        
        $item->save();
    
        return redirect()->back();
    }
    public function cetakData() {
        $user = User::all();
    
        $pdf = new Dompdf();
        $pdf->loadHtml(view('pages.admin.report.user', compact('user')));
    
        $pdf->setPaper('A4', 'landscape');
    
        $pdf->render();
    
        $pdf->stream("data_user.pdf");
    }
    
}
