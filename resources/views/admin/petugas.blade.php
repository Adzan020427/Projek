<style>
.card {
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    border: none;
}

.card-header {
    border-radius: 12px 12px 0 0;
    font-weight: 600;
    font-size: 1.1rem;
}

.form-label {
    font-weight: 500;
}

.form-control {
    border-radius: 8px;
    transition: border-color 0.2s;
}

.form-control:focus {
    border-color: #ffc107;
    box-shadow: 0 0 0 0.1rem rgba(255,193,7,.25);
}

.btn-success, .btn-warning, .btn-danger {
    border-radius: 6px;
    font-weight: 500;
    transition: background 0.2s;
}

.btn-success:hover {
    background: #218838;
}

.btn-warning:hover {
    background: #e0a800;
}

.btn-danger:hover {
    background: #c82333;
}

.table {
    border-radius: 8px;
    overflow: hidden;
    background: #fff;
}

.table th, .table td {
    vertical-align: middle !important;
    text-align: center;
}

@media (max-width: 768px) {
    .card, .card-header, .card-body {
        padding: 1rem;
    }
    .table {
        font-size: 0.95rem;
    }
    .btn {
        font-size: 0.9rem;
        padding: 0.3rem 0.7rem;
    }
}
</style>

<div class="card my-4">
    <div class="card-header bg-warning text-dark">
        <h5 class="mb-0">Form Tambah Petugas</h5>
    </div>
    <div class="card-body">
        <!-- Form Tambah Petugas -->
        <form id="form-tambah-petugas" action="{{ route('admin.petugas.store') }}" method="POST">
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
                                    <button class="btn btn-sm btn-danger btn-delete-petugas" type="submit">Hapus</button>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Validasi Form Tambah Petugas
  const formTambahPetugas = document.getElementById('form-tambah-petugas');
  formTambahPetugas.addEventListener('submit', function(e) {
    const inputs = formTambahPetugas.querySelectorAll('input');
    let valid = true;

    inputs.forEach(input => {
      if (input.value.trim() === '') {
        valid = false;
        input.classList.add('is-invalid');
      } else {
        input.classList.remove('is-invalid');
      }

      // Validasi nomor HP hanya angka
      if (input.name === 'nomor_hp' && !/^\d+$/.test(input.value)) {
        valid = false;
        input.classList.add('is-invalid');
        alert('Nomor HP hanya boleh berisi angka.');
      }
    });

    if (!valid) {
      e.preventDefault();
      alert('Harap isi semua kolom dengan benar.');
    }
  });

  // Konfirmasi Penghapusan
  const deleteButtons = document.querySelectorAll('.btn-delete-petugas');
  deleteButtons.forEach(button => {
    button.addEventListener('click', function(e) {
      const confirmed = confirm('Yakin ingin menghapus petugas ini?');
      if (!confirmed) {
        e.preventDefault();
      }
    });
  });

  // Highlight Baris Tabel
  const tableRows = document.querySelectorAll('.table tbody tr');
  tableRows.forEach(row => {
    row.addEventListener('mouseover', function() {
      row.style.backgroundColor = '#f8f9fa';
    });
    row.addEventListener('mouseout', function() {
      row.style.backgroundColor = '';
    });
  });
});
</script>

