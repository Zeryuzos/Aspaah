<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidad extends Model
{
    use HasFactory;
    public function distrito() {
        return $this->belongsTo('App\Models\Distrito');
    }
    public function socio() {
        return $this->hasOne('App\Models\Socio');
    }
}
