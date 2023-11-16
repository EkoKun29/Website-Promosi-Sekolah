<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul', 'slug', 'image', 'desc',
        // tambahkan atribut lain yang perlu diisi secara massal di sini jika ada
    ];
    protected $tables=['beritas'];
}
