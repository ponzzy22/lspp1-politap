<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_register extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nim', 
        'surel',
        'skema_name',
        'skema_id', 
        'user_id',
        'user_name',
        'status',
        'tmpt_lahir',
        'tgl_lahir',
        'sex_id',
        'negara',
        'alamat',
        'kode_post',
        'no_hp',
        'provinsi',
        'kabupaten',
        'kota',
        'kecamatan',
        'tamatan_id',
        'image',
        'jurusan_id',
        'semester_id',        
        'ktp',
        'khs',
        'ktm',
        'lain'
    ];

    public function xnxxes(){
        return $this->hasMany(Xnxx::class);
    }
}
