<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Prodi;
use app\Models\Unikom;
use app\Models\Asesor;
use app\Models\Tuk;
use app\Models\Status;


class Skema extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'kode', 'skema', 'prodi_id', 'asesor_id', 'tuk_id', 'status_id'];
    protected $table = 'skema';

    public function prodi(){
        return $this->belongsTo(Prodi::class);
    }


    public function asesor(){
        return $this->belongsTo(Asesor::class);
    }


    public function tuk(){
        return $this->belongsTo(Tuk::class);
    }


    public function status(){
        return $this->belongsTo(Status::class);
    }

    // public function unikom(){
    //     return $this->hasMany(Unikom::class);
    // }
}
