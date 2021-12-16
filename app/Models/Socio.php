<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;
    public function categoria() {
        return $this->belongsTo('App\Models\Categoria');
    }
    public function comunidad() {
        return $this->belongsTo('App\Models\Comunidad');
    }
    public function hijo() {
        return $this->hasOne('App\Models\Hijo');
    }
    protected $guarded = ['id'];
}
