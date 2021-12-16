<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunidad;
use App\Models\Provincia;
use App\Models\Distrito;
use App\Models\Departamento;

class ComunidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunidads = Comunidad::all();
        return view ('comunidad.index')->with('comunidads',$comunidads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::all();
        $provincias = Provincia::all();
        $distritos = Distrito::all();
        return view ('comunidad.create', compact('distritos','provincias','departamentos'));
    }
    public function provincia_idByDep($idDepartamento){
    	return Provincia::where('departamento_id','=',$idDepartamento)->get();
    }

    public function distrito_idByProv($idProvincia){
    	return Distrito::where('provincia_id','=',$idProvincia)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comunidads = new Comunidad();
        $comunidads->distrito_id = $request->get('distrito_id');
        $comunidads->no_comunidad = $request->get('no_comunidad');
        $comunidads->de_comunidad = $request->get('de_comunidad');

        $comunidads->save();

        return redirect('/comunidads');
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
        $distritos = Distrito::all();
        $comunidad = Comunidad::find($id);
        return view('comunidad.edit', compact(['comunidad', 'distritos']));
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
        $comunidad = Comunidad::find($id);
        $distrito = Distrito::find($id);
        $comunidad->distrito_id = $request->get('distrito_id');
        $comunidad->no_comunidad = $request->get('no_comunidad');
        $comunidad->de_comunidad = $request->get('de_comunidad');

        $comunidad->save();

        return redirect('/comunidads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comunidad = Comunidad::find($id);
        $comunidad->delete();

        return redirect('/comunidads');
    }
}
