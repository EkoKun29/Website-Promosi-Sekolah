<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul', 'slug', 'image', 'desc',
        // tambahkan atribut lain yang perlu diisi secara massal di sini jika ada
    ];
    protected $tables=['beritas'];
    
    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            function () {
                return Storage::disk('public')->url($this->image);
            }
        );
    }
}
