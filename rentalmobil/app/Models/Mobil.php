<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;

    protected $table = "mobil";
    protected $fillable = [
        'nama_mobil',
        'cc',
        'nomor_polisi',
        'warna',
        'tahun_mobil',
        'foto_mobil',
        'merk_id',
        'tipe_mobil_id'

    ];
}
