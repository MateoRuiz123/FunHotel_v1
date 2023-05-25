<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar reserva</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <div class="mb-3">
          <label for="" class="form-label"> Id Habitacion</label>
          <input type="text"
            class="form-control" name="habitacion" id="" aria-describedby="helpId" placeholder="">
          
          <label for="" class="form-label">Id Servicio</label>
          <input type="text"
            class="form-control" name="servicio" id="" aria-describedby="helpId" placeholder="">
          
          <label for="" class="form-label">Id Cliente</label>
          <input type="text"
            class="form-control" name="cliente" id="" aria-describedby="helpId" placeholder="">

          <label for="" class="form-label">Estado</label>
          <input type="text"
            class="form-control" name="estado" id="" aria-describedby="helpId" placeholder="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
</form>
    </div>
  </div>
</div>