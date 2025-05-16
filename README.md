<p align="center"><strong>SISTEM PEMANTAUAN DAN PELAPORAN SAMPAH LINGKUNGAN</strong></p>

<div align="center">

![logo_unsulbar](public/logo.jpg)



<b>Achmad Adzan Febryan Muharram</b><br>
<b>D0222343</b><br>
<b>Framework Web Based</b><br>
<b>2025</b>
</div>

---
##  Role dan Fitur-fitur

### 1. Owner (Admin Sistem)
- Melihat seluruh data pengguna dan pelapor.
- Melihat dan mengelola semua laporan yang masuk.
- Menghapus akun user atau user jika diperlukan.
- Melihat laporan sampah secara keseluruhan.

---

### 2. Pengguna (Customer)
- Mendaftar dan login ke sistem.
- Melakukan pelaporan serta mengakses form edukasi

---
### 1. `regis`

| Field       | Tipe Data                        | Keterangan                            |
|-------------|----------------------------------|----------------------------------------|
| id          | BIGINT (PK, AUTO_INCREMENT)      | ID unik pengguna                      |
| name        | VARCHAR(255)                     | Nama pengguna                         |
| email       | VARCHAR(255)                     | Email pengguna                        |
| password    | VARCHAR(255)                     | Password (di-hash)                    |
| role        | ENUM('owner','admin','user')     | Peran pengguna dalam sistem           |
| created_at  | DATETIME                         | Tanggal pendaftaran                   |

---

### 2.  `pengaduans`

| Field        | Tipe Data                  | Keterangan                               |
|--------------|------------------------    |------------------------------------------|
| id          | BIGINT (PK, AUTO_INCREMENT) | ID unik pengguna                         |
| name        | VARCHAR(255)                | Nama pelapor                             |
| lokasi       | VARCHAR(255)               | lokasi sampah yang dilaporkan            |
| jenis        | VARCHAR(255)               | Jenis sampah yang dilaporkan             |
| deskripsi    | TEXT                       | Deskripsi pelaporan                      |
| created_at   | DATETIME                   | Tanggal pelaporan di lakukan              |

---

### Daftar Relasi Antar Tabel

| Relasi                           | Jenis Relasi  | Penjelasan                                                                 |
|----------------------------------|---------------|----------------------------------------------------------------------------|
| `regis` → `pengaduans`               | One to Many   | Satu user dapat melakukan pelaporan beberapa kali                      |

---
