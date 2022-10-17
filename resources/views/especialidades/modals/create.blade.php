<!-- Modal -->
<div class="modal animated zoomIn" id="createMdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Especialidad</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
        </button>
      </div>
      <form action="{{ url('/especialidades')}}" role="form" method="POST" id="createEspecialidadFrm">
        <div class="modal-body">
          @csrf
          <div class="form-group">
            <label for="Nombre_especialidad" class="form-fields">Nombre de especialidad</label>
            <input type="text" class="form-control {{$errors->has('Nombre_especialidad') ?  'is-invalid' : ''}}"
              name="Nombre_especialidad" id="Nombre_especialidad" placeholder="">
              @if($errors->has('Nombre_especialidad'))
                <span class="text-danger">{{$errors->first('Nombre_especialidad')}}</span>
              @endif
          </div>    
          <div class="form-group">
            <label for="name" class="form-fields">Descripción</label>
            <textarea class="form-control" name="Descripcion" id="Descripcion" rows="5" placeholder="">
              {{old('Descripcion')}}
            </textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" href="#" class="btn btn-primary">
            Guardar
            <i class="fas fa-spinner fa-spin d-none"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>