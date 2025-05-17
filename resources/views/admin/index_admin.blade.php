@extends('layout.master4')

@section('isi')
<div class="container" style="margin-top: 100px; padding-top: 20px;">
    <h2>Dashboard Admin</h2>
    <hr>

    {{-- Include bagian user --}}
    @include('admin.user')

    <hr>

    {{-- Include bagian petugas --}}
    @include('admin.petugas')

    <hr>

    {{-- Semua Pengaduan --}}
    <h4>Semua Pengaduan</h4>
    <ul>
        @foreach($pengaduan as $p)
            <li>{{ $p->nama }} - {{ $p->lokasi }} - {{ $p->status }}</li>
        @endforeach
    </ul>
</div>
@endsection
