<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socio;
use App\Models\Hijo;

class HijoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hijos = Hijo::all();
        return view ('hijo.index')->with('hijos',$hijos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $socios = Socio::all();
        return view ('hijo.create', compact('socios', 'socios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hijos = new Hijo();
        $hijos->socio_id = $request->get('socio_id');
        $hijos->na_hijo = $request->get('na_hijo');
        $hijos->dni_hijo = $request->get('dni_hijo');
        $hijos->fn_hijo = $request->get('fn_hijo');
        $hijos->ginstruccion_hijo = $request->get('ginstruccion_hijo');

        $hijos->save();

        return redirect('/hijos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $socios = Socio::all();
        $hijo = Hijo::find($id);
        return view('hijo.edit', compact(['hijo', 'socios']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hijo = Hijo::find($id);
        $socio = socio::find($id);
        $hijo->socio_id = $request->get('socio_id');
        $hijo->na_hijo = $request->get('na_hijo');
        $hijo->dni_hijo = $request->get('dni_hijo');
        $hijo->fn_hijo = $request->get('fn_hijo');
        $hijo->ginstruccion_hijo = $request->get('ginstruccion_hijo');

        $hijo->save();

        return redirect('/hijos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hijo = Hijo::find($id);
        $hijo->delete();

        return redirect('/hijos');
    }
}
