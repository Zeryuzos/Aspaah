<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunidad;
use App\Models\Categoria;
use App\Models\Socio;
use App\Models\Hijo;

class PDFController extends Controller
{
    public function PDF()
    {
        $pdf = \PDF::loadView('pdfdow');
        return $pdf->download('pdfdow.pdf');
    }
}
