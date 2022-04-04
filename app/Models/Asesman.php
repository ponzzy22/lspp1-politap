<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesman extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'skema_id',
        'echo'
    ];

    protected $table = 'asesman';

    public function skema(){
        return $this->belongsTo(Skema::class);
    }
}
