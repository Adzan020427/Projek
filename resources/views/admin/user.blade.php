<div class="card my-4">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">Data User</h5>
    </div>
    <div class="card-body">
        @if($users->count())
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $usr)
                        <tr>
                            <td>{{ $usr->name }}</td>
                            <td>{{ $usr->email }}</td>
                            <td>
                                <form method="POST" action="{{ route('admin.user.updateRole', $usr->id) }}">
                                    @csrf
                                    <select name="role" onchange="this.form.submit()" class="form-select form-select-sm">
                                        <option value="admin" {{ $usr->role == 'admin' ? 'selected' : '' }}>admin</option>
                                        <option value="petugas" {{ $usr->role == 'petugas' ? 'selected' : '' }}>petugas</option>
                                        <option value="user" {{ $usr->role == 'user' ? 'selected' : '' }}>user</option>
                                    </select>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('admin.user.destroy', $usr->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-muted">Belum ada data user.</p>
        @endif
    </div>
</div>
