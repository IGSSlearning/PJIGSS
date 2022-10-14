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
        Validator::make($request->all(),[
            'Nombre_especialidad' => 'required|max:100',
            'Descripcion' => 'required|max:2'
        ])->validate();
        
        Especialidad::create($request->all());

        alert()->success('Especialidad guardado correctamente');

        return redirect()->route('especialidades.index');
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
        //
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
        $especialidad->fill($request->all());
        $especialidad->save();

        alert()->success('Especialidad actualizado correctamente');

        return redirect()->route('especialidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
