@extends('layouts.admin')

@section('titulo')
<span>Revision del Oficio con correlativo {{$oficios->correlativo}}</span>
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card mb-4">
            <div class="card-header">
                <div class="row justify-content-between">
                    <h4>Listado de Suspensiones</h4>
                </div>
            </div>
            
            @csrf   
            <div class="card-body">
                <table id="dt-formularios" class="table table-striped table-bordered dts">
                    <thead>
                        <th>ID</th>
                        <th>Estado suspension</th>
                        <th>Inicio suspension</th>
                        <th>Registro de suspension</th>
                        <th>Fin suspension</th>
                        <th>Clinica</th>
                        <th>Doctor</th>
                        <th>Revisar</th>
                    </thead>
                    <tbody>
                        @foreach($ofisusp as $item)
                        @if($item->id_oficio == $oficios->id_oficio)
                            <tr class="table-active">
                                <th scope="row">{{ $item->desuspension->id_suspension}}</th>
                                <td>{{ $item->desuspension->estado }}</td>
                                <td>{{ date('d-m-Y', strtotime($item->desuspension->fecha_inicio_suspension))}}</td>
                                <td>{{ $item->desuspension->fecha_registro }}</td>  
                                <td>{{ date('d-m-Y', strtotime($item->desuspension->fecha_fin_suspension))}}</td> 
                                <td>{{ $item->desuspension->clinica_servicio->nombre}}</td>                            
                                <td>{{ $item->desuspension->medico->nombres}}</td>
                                
                                <td>
                                    @if($item->desuspension->estado == 'Registrado')
                                    <a href="{{ route ('revsusp.edit', $item->desuspension->id_suspension .'&'. $oficios->id_oficio)}}"
                                        class="btn btn-warning"><i class="fas fa-edit"></i> Revisar</a>
                                    @endif
                                </td>
                                
                            </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="row justify-content-between">
                    <a href="{{ route('revofi.show', $oficios->id_oficio) }}"
                        class="btn btn-primary"><i class="fas fa-paper-plane"></i> Congelar Oficio</a>

                    
                    
                    <a type="button" class="btn btn-info" href="{{ url('revofi')}}"><i class="fas fa-reply"></i> Regresar</a>
                </div>
        </div>
                
       
        </div>
    </div>
</div>
@endsection