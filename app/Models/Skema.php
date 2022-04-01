<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Prodi;

class Skema extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'kode', 'skema', 'prodi_id'];
    protected $table = 'skema';

    public function prodi(){
        return $this->belongsTo(Prodi::class);
    }
}
