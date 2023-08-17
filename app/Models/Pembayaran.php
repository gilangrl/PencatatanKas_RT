<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran_iurans';
    protected $fillable = 
    [
        'id_warga',
        'jumlah',
        'tanggal_pembayaran',
    ];
    protected $guarded=[];

    public function warga()
    {
        return $this->belongsTo(warga::class, 'id_warga', 'id');
    }
}
