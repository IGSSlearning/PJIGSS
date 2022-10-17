<?php

namespace App\Http\Controllers;

use App\Http\Requests\EspecialidadRequest;
use App\Models\Especialidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EspecialidadController extends Controller
{
    
    public function index()
    {
        $especialidades = Especialidad::all();

        #return view('especialidades.index', compact(varne: 'especialidad'));
        return view('especialidades.index', compact('especialidades'));
        #Route::get('/especialidades.index', 'EspecialidadController@index')->name('especialidades.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //validacion de los datos obtenidos de la vista
        /*
        Validator::make($request->all(),[
            'Nombre_especialidad' => 'required|max:100',
            'Descripcion' => 'required|max:2'
        ])->validate();
        
        Especialidad::create($request->all());

        alert()->success('Especialidad guardado correctamente');

        return redirect()->route('especialidades.index');
        */
        //Validator::make($request->except('_token'),[
        //    'Nombre_especialidad' => 'required|max:100',
        //    'Descripcion' => 'required|max:2'
        //])->validate();
        
        Especialidad::insert($request->except('_token'));

        alert()->success('Especialidad guardado correctamente');

        return redirect()->route('especialidades.index');
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Especialidad $especialidad)
    {
        $datos =request()->except(('_token'));
        Especialidad::where('id','=',$datos->Id_especialidad);

        $especialidad=Especialidad::findOrFail($datos->id);
        return redirect()->route('especialidades.index');
        /*
        $especialidad->fill($request->all());
        $especialidad->save();

        alert()->success('Especialidad actualizado correctamente');

        return redirect()->route('especialidades.index');
        */
    }

    public function destroy($id)
    {
        //
        Especialidad::destroy($id);
        return redirect()->route('especialidades.index');
    }
}
