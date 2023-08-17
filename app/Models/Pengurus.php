<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'pengurus_rts';
    protected $fillable =
    [
        'nama',
        'jabatan',
        'tanggal_lahir',
        'jenis_kelamin',
        'nomer_telepon',
        'email',
        'pekerjaan',
        'foto_profil',
    ];
    protected $guarded=[];
}
