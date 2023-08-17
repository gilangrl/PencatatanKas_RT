<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuKas extends Model
{
    use HasFactory;
    protected $table = 'buku_kass';

    protected $fillable = 
    [
        'masuk',
        'keluar',
        'keterangan',
        'tanggal',
    ];

    protected $guarded =[];
}
