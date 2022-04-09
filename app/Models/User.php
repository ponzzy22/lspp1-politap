<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use app\Models\Sex;
use app\Models\Semester;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $table = 'users';

    protected $fillable = [
        'id',
        'role',
        'name',
        'email',
        'password',
        'kode',
        'id', 
        'nim', 
        'nama',
        'tmpt_lahir	',
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
        'ttd',
        'ktp',
        'ktm',
        'khs',
        'jurusan_id',
        'semester_id',
        'email'
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sex(){
        return $this->belongsTo(Sex::class);
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class);
    }

    public function semester(){
        return $this->belongsTo(Semester::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
    

    // public function asesmens()
    // {
    //     return $this->hasManyThrough(
    //         Asesmen::class,
    //         Unikom::class,
    //         'skema_id',
    //         'unikom_id'

    //     );
    // }
    
}
