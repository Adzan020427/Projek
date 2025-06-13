<?php 

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampil_petugas()
    {
        if (Auth::check() && Auth::user()->role === 'petugas') {
            $user = Auth::user();
            $petugas = Petugas::where('sampah_id', $user->id)->first();
            $wilayah = $petugas->wilayah_tugas ?? null; // Mengambil kolom wilayah_tugas dari model Petugas

            if (!$wilayah) {
                return abort(403, 'Wilayah tugas tidak ditemukan atau belum diatur.');
            }

            $pengaduan = Pengaduan::where('lokasi', $wilayah)->get();

            return view('format.petugas', compact('pengaduan'));
        }

        return abort(403, 'Akses ditolak.');
    }

    /**
     * Update status pengaduan ke "selesai"
     */
    public function tindak_lanjut($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        if (Auth::user()->role === 'petugas') {
            $pengaduan->status = 'selesai';
            $pengaduan->save();

            return redirect()->route('petugas')->with('success', 'Pengaduan berhasil ditindak lanjuti');
        }

        return abort(403, 'akses ditolak');
    }

    /**
     * Update status pengaduan (opsional tambahan)
     */
    public function update($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->status = 'selesai';
        $pengaduan->save();

        return redirect()->back()->with('success', 'Status pengaduan diperbaharui');
    }

    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('admin.edit_petugas', compact('petugas'));
    }


    public function updatePetugas(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:20',
            'wilayah_tugas' => 'required|string|max:255',
        ]);

        $petugas = Petugas::findOrFail($id);
        $petugas->nama_lengkap = $request->nama_lengkap;
        $petugas->nomor_hp = $request->nomor_hp;
        $petugas->wilayah_tugas = $request->wilayah_tugas;
        $petugas->save();

        return redirect()->back()->with('success', 'Data petugas berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $petugas = Petugas::findOrFail($id);
        $petugas->delete();

        return redirect()->back()->with('success', 'Petugas berhasil dihapus.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:20',
            'wilayah_tugas' => 'required|string|max:100',

            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:regis,email', // sesuaikan nama tabel
            'password' => 'required|string|min:6',
        ]);

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login sebagai user terlebih dahulu');
        }

        $akun = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'petugas' // pastikan kolom 'role' ada
        ]);

        $akun = Petugas::create([
            'sampah_id' => Auth::user()->id,
            'nama_lengkap' => $request->nama_lengkap,
            'nomor_hp' => $request->nomor_hp,
            'wilayah_tugas' => $request->wilayah_tugas
        ]);

        return redirect()->back()->with('success','data petugas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
}
