<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_galeri extends Model
{
    use HasFactory;

    protected $fillable = ['galeri'];

    public function galeri_fotos(){
        return $this->hasMany(Galeri_foto::class);
    }
}
