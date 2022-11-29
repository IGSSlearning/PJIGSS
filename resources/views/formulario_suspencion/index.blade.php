@extends('layouts.admin')

@section('titulo')
<span>Formulario_Suspencion</span>
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card mb-4">
            <div class="card-header">
                <div class="row justify-content-between">
                    <h4>Listado de formularios suspensiones</h4>
                    <a type="button" class="btn btn-primary" href="{{route('formsusp.create')}}"><i class="fas fa-plus"></i>Nuevo</a>
                </div>
            </div>
            <div class="card-body">
                <table id="dt-formularios" class="table table-striped table-bordered dts">
                    <thead>
                        <th>No.</th>
                        <th>idFormulario</th>
                        <th>idSuspencion</th>
                        <th>Estado</th>
                        <th style="height: auto">Opciones</th>
                    </thead>
                    <tbody>
                        @foreach($form_sus as $item)
                        <tr class="text-center">
                            <td>{{ $item->id_suspencion }}</td>
                            <td>{{ $item->id_formulario }}</td>
                            <td>{{ $item->id_suspension}}</td>
                            <td>{{ $item->estado}}</td>
                            <td>
                                <table>
                                        <td>
                                            <a href="{{ route ('formsusp.edit', $item->id_suspencion) }}"
                                                class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('formsusp.destroy',$item->id_suspencion)}} " method ="post">
                                                @csrf
                                                    {{method_field('DELETE')}}
                                                    
                                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                            
                                        </td>
                                    
                                    
                                </table>
                                
                                
                                
                                
                                </form>
                            </td>
                        </tr>
                        @endforeach                
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection