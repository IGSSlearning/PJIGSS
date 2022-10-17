@extends('layouts.admin')

@section('titulo')
    <span>Especialidades</span>

    <a href="" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#createMdl">
        <i class="fas fa-plus"></i>
    </a>
@endsection
@section('contenido')

    @include('especialidades.modals.create')
    @include('especialidades.modals.update')
    @include('especialidades.modals.delete')

    <div class="card">
        <div class="card-body">
            <table id="dt-especialidad" class="table table-striped table-bordered dts">
                <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($especialidades as $especialidad)
                    <tr class="text-center">
                        <td>{{ $especialidad->Id_especialidad }}</td>
                        <td>{{ $especialidad->Nombre_especialidad }}</td>
                        <td>{{ $especialidad->Descripcion }}</td>
                        <td>
                            <a href="" class="edit-form-data" data-toggle="modal" data-target="#editMdl"
                            onclick="editEspecialidad({{$especialidad}})">
                                <i class="far fa-edit"></i>
                            </a>
                            <form action="{{ url('especialidades/'.$especialidad)}} " method ="post">
                                @csrf
                                    {{ method_field('DELETE') }}
                                <a href="" class="detele-form-data" data-toggle="modal" data-target="#deleteMdl">
                                    <i class="far fa-trash-alt"></i>
                                    <input type="submit" onclick="return confirm('¿Desea borrar el registro?')" value="Borrar">
                                </a>
                            </form>
                            

                            

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        function editEspecialidad(especialidad){
            $("#editEspecialidadFrm").attr('action',`/especialidad/${especialidad.id}`);

            $("#editEspecialidadFrm #Id_especialidad").val(especialidad.Id_especialidad);
            $("#editEspecialidadFrm #Nombre_especialidad").val(especialidad.Nombre_especialidad);
            $("#editEspecialidadFrm #Descripcion").val(especialidad.Descripcion);
            
        }
    </script>

    @if(!$errors->isEmpty())
        @if($errors->has('POST'))
            <script>
                $(function () {
                    $('#createMdl').modal('show');
                });
            </script>
        @else
            <script>
                $(function () {
                    $('#editMdl').modal('show');
                });
            </script>
        @endif
    @endif
@endpush 