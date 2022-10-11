<!-- Modal -->
<div class="modal animated zoomIn" id="createMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Especialidad</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('especialidades.sotre')}}" role="form" method="POST" id="createEspecialidadFrm">
            {{csrf_field()}}
            <div class="row">
                <div class="class col-lg-6 form-group">
                    <div>
                        <label for="name" class="form-fields">Id_especialidad</label>
                        <label class="form-fields">*</label>
                        <input type="text"
                               class="form-control"
                               name="Id" id="Id" placeholder="-">
                    </div>
                </div>
                <div class="class col-lg-6 form-group">
                    <div>
                        <label for="name" class="form-fields">Nombre_especialidad</label>
                        <label class="form-fields">*</label>
                        <input type="text"
                               class="form-control {{$errors->has)¡('name') ?  'is-invalid' : ''}}"
                               name="name" id="name" placeholder="-">
                        @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif    
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 form-group">
                        <div>
                            <label for="name" class="form-fields">Descripción</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" rows="5">
                                {{old('descripcion')}}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>