<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 
        'nis', 
        'agama', 
        'jenis_kelamin', 
        'alamat', 
        'tgl_lahir'
    ];

    public $timestamps = true;
}