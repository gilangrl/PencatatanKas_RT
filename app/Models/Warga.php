<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'wargas';
    protected $fillable=
    [
        'nama',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'nomer_telepon',
        'email',
        'status_kawin',
        'pekerjaan',
        'foto_profil',
    ];

    protected $guarded=[];
}
