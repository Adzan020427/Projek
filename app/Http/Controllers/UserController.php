<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Pengaduan::where('id', Auth::id())->get();

        return view('admin.user', compact('users'));
    }

    public function kirimPengaduan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required'
        ]);

        $data = $request->all();

        $data['sampah_id'] = Auth::id();
        $data['status'] = 'belum diproses';

        Pengaduan::create($data);

        return redirect()->back()->with('succes', 'pengaduan berhasil dikirim');

    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
