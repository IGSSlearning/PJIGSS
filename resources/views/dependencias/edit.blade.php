@extends('layouts.admin')

@section('titulo')
<span>Editar Dependencia</span>
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4>Editar datos de dependencia</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('dependencias.update', $dependencias->id_dependencia) }}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" value="{{ $dependencias->nombre}}" id="nombre" class="form-control" placeholder="Ingrese nombre de dependencia">   
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row justify-content-between">
                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                        <a type="button" class="btn btn-danger" href="{{ url('dependencias')}}">CANCELAR</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection