<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;

    protected $table = 'identitas';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = [
        'nik',
        'nama_lengkap',
        'tempat_tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'rt_rw',
        'kel_desa',
        'kecamatan',
        'agama',
        'status_perkawinan',
        'pekerjaan',
        'kewarganegaraan',
        'berlaku_hingga',
        'foto_ktp',
        'image',
    ];

    protected $guarded = [];

    public $timestamps = false;
}
