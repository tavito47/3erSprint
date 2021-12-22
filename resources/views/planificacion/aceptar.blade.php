
<!-- ACEPTAR -->
<div class="modal fade" id="exampleModal1{{$aceptar}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Emitir contrato</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="{{url('aceptar')}}" enctype="multipart/form-data">
        @csrf
          <div class="modal-body">
            <input type="hidden" name="planificacion_id" value="{{$aceptar}}">
            
                <div class="mb-3">
                    <label for="inputPassword4"  class="form-label">Subir Contrado</label>
                    <input type="file" accept=".pdf" class="form-control" name="file" aria-label="file example" required>
                    <div class="invalid-feedback">Subir PDF</div>
                </div>

          
            <div class="col-md">
                    <label for="floatingSelectGrid">Correo</label>
                    <input readonly type="text"  class="form-control" value="{{@$correo}}" name="correo">
                    
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>