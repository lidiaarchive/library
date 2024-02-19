<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'isbn',
        'cover',
        'judul',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'pdf'
    ];
    protected $table = 'ebooks';
}
