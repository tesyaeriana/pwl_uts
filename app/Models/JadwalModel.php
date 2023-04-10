<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalModel extends Model
{
    use HasFactory;
    protected $table ='jadwal';
    protected $fillable =[
        'kode_jadwal',
        'nama_pemilik',
        'nama_peliharaan',
        'layanan',
        'tgl_msk',
        'tgl_klr'
    ];
}
