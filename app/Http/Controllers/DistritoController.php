<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Models\Distrito;
use App\Models\Departamento;

class DistritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distritos = Distrito::all();
        return view ('distrito.index')->with('distritos',$distritos);
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
        return view ('distrito.create', compact('provincias', 'departamentos'));
    }
    public function provincia_idByDep($idDepartamento){
        return Provincia::where('departamento_id','=',$idDepartamento)->get();
    	//return Provincia::where('departamento_id', $idDepartamento)->orderBy('no_provincia')->lists('no_provincia', 'id');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $distritos = new Distrito();
        $distritos->provincia_id = $request->get('provincia_id');
        $distritos->no_distrito = $request->get('no_distrito');

        $distritos->save();

        return redirect('/distritos');
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
        $provincias = Provincia::all();
        $distrito = Distrito::find($id);
        return view('distrito.edit', compact(['distrito', 'provincias', 'departamentos']));
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
        $distrito = Distrito::find($id);
        $provincia = Provincia::find($id);
        $distrito->provincia_id = $request->get('provincia_id');
        $distrito->no_distrito = $request->get('no_distrito');

        $distrito->save();

        return redirect('/distritos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distrito = Distrito::find($id);
        $distrito->delete();

        return redirect('/distritos');
    }
}
