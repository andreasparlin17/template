<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'judul_buku',
        'id_kategori',
        'id_penerbit',
        'pengarang',
        'tahun_terbit',
        'isbn',
        'j_buku_baik',
        'j_buku_rusak',
    ];
    public $timestamps = false;
}
