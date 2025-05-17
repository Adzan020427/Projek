
@extends('layout.master')

@section('isi')
<div class="container" style="margin-top: 100px; padding-top: 20px;">
    <h2 class="mb-4">Form Pengaduan Sampah</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form method="POST" action="{{ route('kirim_pengaduan') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="nama" class="form-label">Nama Pelapor</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
        @error('nama')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="lokasi" class="form-label">Lokasi Sampah</label>
        <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" required>
        @error('lokasi')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="jenis" class="form-label">Jenis Sampah</label>
        <select class="form-select" id="jenis" name="jenis" required>
            <option value="">-- Pilih Jenis Sampah --</option>
            <option value="Organik" {{ old('jenis') == 'Organik' ? 'selected' : '' }}>Organik</option>
            <option value="Anorganik" {{ old('jenis') == 'Anorganik' ? 'selected' : '' }}>Anorganik</option>
            <option value="B3 (Bahan Berbahaya dan Beracun)" {{ old('jenis') == 'B3 (Bahan Berbahaya dan Beracun)' ? 'selected' : '' }}>B3</option>
            <option value="Lainnya" {{ old('jenis') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
        </select>
        @error('jenis')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi Aduan</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi') }}</textarea>
        @error('deskripsi')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary w-100">Kirim Pengaduan</button>
</form>

</div>
@endsection
