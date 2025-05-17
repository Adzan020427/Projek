@extends('layout.master')

@section('isi')
<div class="container" style="margin-top: 100px; padding-top: 20px;">
    @if(Auth::user()->role === 'petugas')
        <h2>Halo, Petugas {{ Auth::user()->name }}</h2>
        <p>Wilayah Tugas: {{ Auth::user()->petugas->wilayah_tugas ?? '-' }}</p>

        <hr>

        <h4>Daftar Pengaduan di Wilayahmu</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Pelapor</th>
                    <th>Lokasi</th>
                    <th>Jenis Sampah</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengaduan as $aduan)
                    <tr>
                        <td>{{ $aduan->nama }}</td>
                        <td>{{ $aduan->lokasi }}</td>
                        <td>{{ $aduan->jenis }}</td>
                        <td>{{ $aduan->deskripsi }}</td>
                        <td>{{ $aduan->status }}</td>
                        <td>
                            @if($aduan->status !== 'Selesai')
                                <form action="{{ route('tindak_lanjut', $aduan->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-success btn-sm">Tindak Lanjuti</button>
                                </form>
                            @else
                                <span class="badge bg-success">Selesai</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-danger">
            Anda tidak memiliki akses ke halaman ini.
        </div>
    @endif
</div>
@endsection
