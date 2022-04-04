<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unikom extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'unikom', 'skema_id'];

    public function skema(){
        return $this->belongsTo(Skema::class);
    }


}
