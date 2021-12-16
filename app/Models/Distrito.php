<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;
    public function provincia() {
        return $this->belongsTo('App\Models\Provincia');
    }
    public function comunidad() {
        return $this->hasOne('App\Models\Comunidad');
    }
}
