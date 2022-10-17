<!-- Modal -->
<div class="modal animated zoomIn" id="editMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-inspinia text-primary" id="exampleModalLabel">Editar Especialidad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/especialidades')}}" role="form" method="PATCH" id="editEspecialidadFrm">
                    @csrf
                    {{csrf_field()}}
                    
                    <div class="col-lg-6 form-group">
                        <div>
                            <label for="Id_especialidad" class="form-fields">Id</label>
                            <input type="text" name="Id_especialidad" id="Id_especialidad" readonly
                                class="form-control {{$errors->has('Id_especialidad') ? 'is-invalid' : ''}}"                                        name="name" id="name" value="{{old('name')}}" placeholder="-">
                            @if ($errors->has('Id_especialidad'))
                                <span class="text-danger">{{ $errors->first('Id_especialidad') }}</span>
                            @endif
                        </div>
                    </div>
                    
                        <div class="col-lg-6 form-group">
                            <div>
                                <label for="Nombre_especialidad" class="form-fields">Nombre</label>
                                <input type="text" name="Nombre_especialidad" id="Nombre_especialidad"
                                    class="form-control {{$errors->has('Nombre_especialidad') ? 'is-invalid' : ''}}"                                        name="name" id="name" value="{{old('name')}}" placeholder="-">
                                @if ($errors->has('Nombre_especialidad'))
                                    <span class="text-danger">{{ $errors->first('Nombre_especialidad') }}</span>
                                @endif
                            </div>
                        </div>
                    
                    
                        <div class="col-lg-12 form-group">
                            <div>
                                <label for="Descripcion" class="form-fields">Descripción</label>
                                <textarea class="form-control" name="Descripcion" id="Descripcion"                                          rows="3">{{old('description')}}</textarea>
                                @if ($errors->has('Descripcion'))
                                    <span class="text-danger">{{ $errors->first('Descripcion') }}</span>
                                @endif
                            </div>
                        </div>
                    

                    <div class="buttons-form-submit d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">
                            Editar
                            <i class="fas fa-spinner fa-spin d-none"></i>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
