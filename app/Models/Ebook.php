<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'id',
        'cover',
        'judul',
        'isbn',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'pdf'
    ];
}
