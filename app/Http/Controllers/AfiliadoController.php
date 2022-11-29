<?php

namespace App\Http\Controllers;

use App\Models\Afiliado;
use App\Models\TipoAfiliado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AfiliadoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:especialidad-list|especialidad-create|especialidad-edit|especialidad-delete', ['only' => ['index','show']]);
        $this->middleware('permission:especialidad-create', ['only' => ['create','store']]);
        $this->middleware('permission:especialidad-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:especialidad-delete', ['only' => ['destroy']]);
    }
    
    public function index()
    {
        $afiliados = Afiliado::all();
        $tipo = TipoAfiliado::all();

        return view('afiliados/index', compact('afiliados','tipo'));

    }

    public function create()
    {
        
        $afiliados = Afiliado::all();
        $tipos = TipoAfiliado::all();

        return view('afiliados/create', compact('afiliados','tipos'));
    }

    public function store(Request $request)
    {
        validator::make($request->except('_token'), [
            'cui' => 'required|max:13',
            'nombre' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'telefono' => 'required|max:15',
            'direccion' => 'required|max:50',
            'genero' => 'required|max:15'
        ])->validate();

        $Afiliado = new Afiliado();
        $Afiliado->cui = $request->get('cui');
        $Afiliado->nombre = $request->get('nombre');
        $Afiliado->apellidos = $request->get('apellidos');
        $Afiliado->telefono = $request->get('telefono');
        $Afiliado->direccion = $request->get('direccion');
        $Afiliado->genero = $request->get('genero');
        $Afiliado->fecha_nacimiento = $request->get('fecha_nacimiento');
        $Afiliado->ibm = $request->get('ibm');
        $Afiliado->id_tipo_afiliado = $request->get('id_tipo_afiliado');

        $Afiliado->save();

        alert()->success('Afiliado guardado correctamente');

        return redirect()->route('afiliados.index');
        
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $afiliados = Afiliado::find($id);
        $tipos = TipoAfiliado::all();

        return view('afiliados.edit', compact('afiliados','tipos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cui' => 'required|max:13',
            'nombre' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'telefono' => 'required|max:15',
            'direccion' => 'required|max:50',
            'genero' => 'required|max:15'
        ]);

        $Afiliado = Afiliado::find($id);
        $Afiliado->cui = $request->get('cui');
        $Afiliado->nombre = $request->get('nombre');
        $Afiliado->apellidos = $request->get('apellidos');
        $Afiliado->telefono = $request->get('telefono');
        $Afiliado->direccion = $request->get('direccion');
        $Afiliado->genero = $request->get('genero');
        $Afiliado->fecha_nacimiento = $request->get('fecha_nacimiento');
        $Afiliado->ibm = $request->get('ibm');
        $Afiliado->id_tipo_afiliado = $request->get('id_tipo_afiliado');

        $Afiliado->save();

        alert()->success('Afiliado actualizado correctamente');

        return redirect()->route('afiliados.index');
    }

    public function destroy($id)
    {
        //
        Afiliado::destroy($id);
        return redirect()->route('afiliados.index');
    }
}
