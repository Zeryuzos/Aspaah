<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Models\Departamento;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincias = Provincia::all();
        return view ('provincia.index')->with('provincias',$provincias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view ('provincia.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provincias = new Provincia();
        $provincias->departamento_id = $request->get('departamento_id');
        $provincias->no_provincia = $request->get('no_provincia');

        $provincias->save();

        return redirect('/provincias');
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
        $departamentos = Departamento::all();
        $provincia = Provincia::find($id);
        return view('provincia.edit', compact(['provincia', 'departamentos']));
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
        $provincia = Provincia::find($id);
        $departamento = Departamento::find($id);
        $provincia->departamento_id = $request->get('departamento_id');
        $provincia->no_provincia = $request->get('no_provincia');

        $provincia->save();

        return redirect('/provincias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provincia = Provincia::find($id);
        $provincia->delete();

        return redirect('/provincias');
    }
}
