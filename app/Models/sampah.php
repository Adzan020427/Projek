<?php

namespace App\Models;

use App\Models\Petugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Gunakan ini, bukan Model biasa
use Illuminate\Notifications\Notifiable;


class sampah extends Authenticatable
{
    use Notifiable;

    protected $table = 'regis';
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


}
