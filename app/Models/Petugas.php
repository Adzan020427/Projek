<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';

    protected $fillable = [
        'sampah_id',
        'nama_lengkap',
        'nomor_hp',
        'wilayah_tugas',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'sampah_id', 'id');
    }

}
