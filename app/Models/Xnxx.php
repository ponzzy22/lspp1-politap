<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xnxx extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'status', 'user_id', 'user_nama', 'skema_name', 'skema_id'];
}
