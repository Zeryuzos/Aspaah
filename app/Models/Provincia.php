<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;
    public function departamento() {
        return $this->belongsTo('App\Models\Departamento');
    }
    public function distrito() {
        return $this->hasOne('App\Models\Distrito');
    }
}
