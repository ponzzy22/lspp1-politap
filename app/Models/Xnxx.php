<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xnxx extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'unikom_id', 
        'unikom_name',
        'data_register_id',
        'image', 
        'status', 
        'user_id', 
        'skema_name', 
        'skema_id'
    ];

    public function data_register(){
        return $this->belongsTo(Data_register::class);
    }
}
