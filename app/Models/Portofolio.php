<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolios';

    protected $fillable = [
        'nama',
        'deskripsi',
        'kategori',
        'tanggal',
        'gambar',
    ];      
}
