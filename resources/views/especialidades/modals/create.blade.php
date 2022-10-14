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
      <form action="{{ route('especialidades.store')}}" role="form" method="POST" id="createEspecialidadFrm">
        <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="name" class="form-fields">Nombre_especialidad</label>
            <label class="form-fields">*</label>
            <input type="text" class="form-control {{$errors->has('name') ?  'is-invalid' : ''}}"
              name="Nombre_especialidad" id="name" placeholder="-">
              @if($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
              @endif
          </div>    
          <div class="form-group">
            <label for="name" class="form-fields">Descripción</label>
            <textarea class="form-control" name="Descripcion" id="descripcion" rows="5">
              {{old('descripcion')}}
            </textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" href="#" class="btn btn-primary">
            Guardar
            <i class="fas fa-spinner fa-spin d-none"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>