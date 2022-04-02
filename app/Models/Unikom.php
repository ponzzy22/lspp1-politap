<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Skema;

class Unikom extends Model
{
    use HasFactory;
    protected $fillable = ['kode', 'unikom', 'skema_id'];
    protected $table = 'unit_kompetensi';

    public function skema(){
        return $this->belongsTo(Skema::class);
    }
}
