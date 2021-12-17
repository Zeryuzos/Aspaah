<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;
use App\Models\Comunidad;
use App\Models\Categoria;
use App\Models\Socio;
use App\Models\Hijo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socios = Socio::all();
        return view ('socio.index')->with('socios',$socios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos =Departamento::all();
        $categorias =Categoria::all();
        return view ('socio.create', compact('categorias','departamentos'));
    }
    public function provincia_idByDep($idDepartamento){
    	return Provincia::where('departamento_id','=',$idDepartamento)->get();
    }

    public function distrito_idByProv($idProvincia){
    	return Distrito::where('provincia_id','=',$idProvincia)->get();
    }
    public function comunidad_idByDist($idComunidad){
    	return Comunidad::where('distrito_id','=',$idComunidad)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$socios = new Socio();
        $socios->categoria_id = $request->get('categoria_id');
        $socios->no_socio = $request->get('no_socio');
        $socios->ap_socio = $request->get('ap_socio');
        $socios->am_socio = $request->get('am_socio');
        $socios->dni_socio = $request->get('dni_socio');
        $socios->em_socio = $request->get('em_socio');
        $socios->nu_celular_socio = $request->get('nu_celular_socio');
        $socios->fn_socio = $request->get('fn_socio');
        $socios->es_civil_socio = $request->get('es_civil_socio');
        $socios->di_socio = $request->get('di_socio');
        $socios->ruc_socio = $request->get('ruc_socio');
        $socios->comunidad_id = $request->get('comunidad_id');
        $socios->latitud_socio = $request->get('latitud_socio');
        $socios->longitud_socio = $request->get('longitud_socio');
        $socios->ocupacion_socio = $request->get('ocupacion_socio');
        $socios->ginstruccion_socio = $request->get('ginstruccion_socio');
        $socios->es_socio = $request->get('es_socio');
        $socios->im_socio = $request->get('im_socio');
        $socios->conyugue_socio = $request->get('conyugue_socio');
        $socios->conyugue_dni_socio = $request->get('conyugue_dni_socio');
        $socios->observaciones_socio = $request->get('observaciones_socio');
        $socios->save();*/
        
        DB::beginTransaction();
        try {
            $request->validate([
                'im_socio' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
            ]);
            $data = $request->all();
            if($request->hasFile('im_socio')){
                $path = $request->file('im_socio')->store('public/images');
                $data['im_socio'] = $path;
            }

            $socio = new Socio();
            $id_socio=$socio = Socio::create($data, $request->all())->id;
            for ($i=0; $i <count($request->get('na_hijo')); $i++){
                $hijos = new Hijo();
                $hijos->socio_id = $id_socio;
                $hijos->na_hijo = $request->get('na_hijo')[$i];
                $hijos->dni_hijo = $request->get('dni_hijo')[$i];
                $hijos->fn_hijo = $request->get('fn_hijo')[$i];
                $hijos->ginstruccion_hijo = $request->get('ginstruccion_hijo')[$i];
                $hijos->save();

            };
            DB::commit();
            return redirect('/socios');
            
        }catch(\Exception $e){
            DB::rollBack();
            return $e->getMessage();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(/*Socio $socio*/$id)
    {
        $comunidads = Comunidad::all();
        $categorias = Categoria::all();
        $hijos = Hijo::all();
        $socio = Socio::findOrFail($id);
        return view('socio.show', compact(['socio', 'categorias', 'comunidads', 'hijos']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comunidads = Comunidad::all();
        $categorias = Categoria::all();
        $socio = socio::find($id);
        return view('socio.edit', compact(['socio', 'categorias', 'comunidads']));
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
        /*$soc = $request->all();

        if($im_socio = $request->file('im_socio')){
            $rutaGuardarImg = 'foto/';
            $imagenSocio = date('YmdHis'). "." . $im_socio->getClientOriginalExtension();
            $im_socio->move($rutaGuardarImg, $imagenSocio);
            $soc['im_socio'] = "$imagenSocio";
        }else{
            unset($soc['im_socio']);
        }
        $socio->save($soc);

        $data = $request->all();
            if($im_socio = $request->hasFile('im_socio')){
                $destination_path = 'public/images';
                $imagen = $request->file('im_socio');
                $img_name = $imagen->getClientOriginalName();
                $path = $request->file('im_socio')->storeAs($destination_path, $img_name);
                $data['im_socio'] = $img_name;
            }else{
                unset($data['im_socio']);
            }
        $socio->save($data);

        return redirect('/socios');*/

        $socio = Socio::find($id);
        $socio->categoria_id = $request->get('categoria_id');
        $socio->no_socio = $request->get('no_socio');
        $socio->ap_socio = $request->get('ap_socio');
        $socio->am_socio = $request->get('am_socio');
        $socio->dni_socio = $request->get('dni_socio');
        $socio->em_socio = $request->get('em_socio');
        $socio->nu_celular_socio = $request->get('nu_celular_socio');
        $socio->fn_socio = $request->get('fn_socio');
        $socio->es_civil_socio = $request->get('es_civil_socio');
        $socio->di_socio = $request->get('di_socio');
        $socio->ruc_socio = $request->get('ruc_socio');
        $socio->comunidad_id = $request->get('comunidad_id');
        $socio->latitud_socio = $request->get('latitud_socio');
        $socio->longitud_socio = $request->get('longitud_socio');
        $socio->ocupacion_socio = $request->get('ocupacion_socio');
        $socio->ginstruccion_socio = $request->get('ginstruccion_socio');
        $socio->es_socio = $request->get('es_socio');
        if($request->hasFile('im_socio')){
            $request->validate([
              'im_socio' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
            ]);
            $path = $request->file('im_socio')->store('public/images');
            $socio->im_socio = $path;
        }
        $socio->conyugue_socio = $request->get('conyugue_socio');
        $socio->conyugue_dni_socio = $request->get('conyugue_dni_socio');
        $socio->observaciones_socio = $request->get('observaciones_socio');
        $socio->save();
        return redirect('/socios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $socio = socio::find($id);
        $socio->delete();

        return redirect('/socios');
    }
}
