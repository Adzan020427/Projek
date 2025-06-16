<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Petugas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 600px;
            background: #fff;
            padding: 25px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            margin-bottom: 25px;
        }
        form div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .error {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }
        button {
            padding: 10px 20px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Petugas</h1>
        <form action="/admin/petugas/{{ $petugas->id }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $petugas->nama_lengkap) }}" required>
                @error('nama_lengkap')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="nomor_hp">Nomor HP:</label>
                <input type="text" id="nomor_hp" name="nomor_hp" value="{{ old('nomor_hp', $petugas->nomor_hp) }}" required>
                @error('nomor_hp')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="wilayah_tugas">Wilayah Tugas:</label>
                <input type="text" id="wilayah_tugas" name="wilayah_tugas" value="{{ old('wilayah_tugas', $petugas->wilayah_tugas) }}" required>
                @error('wilayah_tugas')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
