<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Konsentrasi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $tables=['konsentrasis'];
    
    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            function () {
                return Storage::disk('public')->url($this->image);
            }
        );
    }
}
