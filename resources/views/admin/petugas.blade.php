<div class="card my-4">
    <div class="card-header bg-warning text-dark">
        <h5 class="mb-0">Form Tambah Petugas</h5>
    </div>
    <div class="card-body">
        <!-- Form Tambah Petugas -->
        <form action="{{ route('admin.petugas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nomor_hp" class="form-label">Nomor HP</label>
                <input type="text" name="nomor_hp" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="wilayah_tugas" class="form-label">Wilayah Tugas</label>
                <input type="text" name="wilayah_tugas" class="form-control" required>
            </div>

            <hr>
            <h6 class="mb-3">Buat Akun Login Petugas</h6>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Akun</label>
                <input type="text" name="name" class="form-control" placeholder="Nama untuk login" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Akun</label>
                <input type="email" name="email" class="form-control" placeholder="Email untuk login" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password Akun</label>
                <input type="password" name="password" class="form-control" placeholder="Password untuk login" required>
            </div>

            <button type="submit" class="btn btn-success">Tambah Petugas</button>
        </form>
    </div>
</div>

<div class="card my-4">
    <div class="card-header bg-warning text-dark">
        <h5 class="mb-0">Data Petugas</h5>
    </div>
    <div class="card-body">
        @if($petugas->count())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Nomor HP</th>
                        <th>Wilayah Tugas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($petugas as $ptg)
                        <tr>
                            <td>{{ $ptg->nama_lengkap }}</td>
                            <td>{{ $ptg->nomor_hp }}</td>
                            <td>{{ $ptg->wilayah_tugas }}</td>
                            <td>
                                <a href="{{ route('admin.petugas.edit', $ptg->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.petugas.destroy', $ptg->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus petugas ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-muted">Belum ada data petugas.</p>
        @endif
    </div>
</div>
