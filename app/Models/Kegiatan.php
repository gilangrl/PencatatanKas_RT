<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatans';
    protected $fillable =
    [
        'nama_kegiatan',
        'tanggal_kegiatan',
        'deskripsi',
        'lokasi',
        'id_pengurus',
    ];
    protected $guarded=[];

    public function pengurus()
    {
        return $this->belongsTo(pengurus::class, 'id_pengurus', 'id');
    }
}
