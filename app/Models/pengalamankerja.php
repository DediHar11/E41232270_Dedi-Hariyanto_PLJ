<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengalamankerja extends Model
{
    use HasFactory;
    protected $table = 'pengalaman_kerja';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama','jabatan','tahun_masuk','tahun_keluar',
    ];
}
