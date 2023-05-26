<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="edit{{$reserva->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar reserva</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('home.update',$reserva->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="modal-body">
        <div class="mb-3">
          <label for="" class="form-label"> Id Habitacion</label>
          <input type="text"
            class="form-control" name="habitacion" id="" aria-describedby="helpId" placeholder="" value="{{$reserva->habitacion}}">
          
          <label for="" class="form-label">Id Servicio</label>
          <input type="text"
            class="form-control" name="servicio" id="" aria-describedby="helpId" placeholder="" value="{{$reserva->servicio}}">
          
          <label for="" class="form-label">Id Cliente</label>
          <input type="text"
            class="form-control" name="cliente" id="" aria-describedby="helpId" placeholder="" value="{{$reserva->cliente}}">

          <label for="" class="form-label">Estado</label>
          <input type="text"
            class="form-control" name="estado" id="" aria-describedby="helpId" placeholder="" value="{{$reserva->estado}}">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Editar</button>
      </div>
</form>
    </div>
  </div>
</div>






<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="delete{{$reserva->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar reserva</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('home.destroy',$reserva->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
      <div class="modal-body">
        Estas seguro de eliminar la reserva #<strong>{{$reserva->id}}</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
</form>
    </div>
  </div>
</div>