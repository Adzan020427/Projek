<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Petugas;
use App\Models\sampah;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = sampah::all();
        $petugas = Petugas::with('user')->get();
        $pengaduan = Pengaduan::all();
        
        return view('admin.index_admin', compact('users','petugas','pengaduan'));
    }
    
    public function updateRole(Request $request, $id)
    {
        $user = sampah::findOrFail($id);
        $user->role = $request->role;
        $user->save();

        return redirect()->back()->with('succes', 'role diperbaharui');
    }

    public function destroy(string $id)
    {
        $user = sampah::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('succes','data user berhasil dihapus');

    }

    // public function users()
    // {
    //     $users = sampah::all();
    //     return view('admin.user',compact('users'));
    // }
        


    // public function petugas(){
    //     $petugas = Petugas::with('user')->get();
    //     return view('admin.petugas', compact('petugas'));
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function storePetugas(Request $request)
    // {
    //     $request->validate([
    //         'sampah_id' => 'required|exists:regis,id',
    //         'nama_lengkap' => 'required|string|max:255',
    //         'nomor_hp' => 'nullable|string|max:20',
    //         'wilayah_tugas' => 'nullable|string|max:100',
    //     ]);

    //     Petugas::create($request->all());

    //     return redirect()->back()->with('succes','petugas berhasil ditambahkan');
    // }

    // public function pengaduan(){
    //     $pengaduan = Pengaduan::latest()->get();
    //     return view('admin.pengaduan', compact('pengaduan'));
    // }

    // public function updateStatus(Request $request){
    //     $request->validate([
    //         'id' => 'required|exist:pengaduans,id',
    //         'status' => 'required|string|max:50'
    //     ]);

    //     $pengaduan = Pengaduan::findOrFail($request->id);
    //     $pengaduan->status = $request->status;
    //     $pengaduan->save();

    //     return redirect()->back()->with('succes', 'status pengaduan berhasil diperbaharui');
    // }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */

}
