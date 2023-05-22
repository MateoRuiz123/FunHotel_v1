<!-- Actualiza y elimina -->
<!-- Modal -->
<div class="modal fade" id="EDITAR{{ $cliente->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR CLIENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('clientes.update', $cliente->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <!--Clave evita error -->
                @method('PUT')
                <!-- Metodo para actualizar -->
                <div class="modal-body">
                    <!--BS5-form-input -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="primerNombre" id="primerNombre"
                                    aria-describedby="helpId" placeholder="" value="{{ $cliente->primerNombre }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Segundo Nombre</label>
                                <input type="text" class="form-control" name="segundoNombre" id="segundoNombre"
                                    aria-describedby="helpId" placeholder="" value="{{ $cliente->segundoNombre }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Primer Apellido</label>
                                <input type="text" class="form-control" name="primerApellido" id="primerApellido"
                                    aria-describedby="helpId" placeholder="" value="{{ $cliente->primerApellido }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Segundo Apellido</label>
                                <input type="text" class="form-control" name="segundoApellido" id="segundoApellido"
                                    aria-describedby="helpId" placeholder="" value="{{ $cliente->segundoApellido }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Tipo documento</label>
                                <select class="form-control" name="tipoDocumento" id="tipoDocumento">
                                    <option selected value="{{ $cliente->tipoDocumento }}">{{ $cliente->tipoDocumento }}
                                    </option>
                                    <option value="CE">CE</option>
                                    <option value="TI">T.I</option>
                                    <option value="PA">PA</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Documento</label>
                                <input type="text" class="form-control" name="numeroDocumento" id="numeroDocumento"
                                    aria-describedby="helpId" placeholder="" value="{{ $cliente->numeroDocumento }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Celular</label>
                                <input type="text" class="form-control" name="celular" id="celular"
                                    aria-describedby="helpId" placeholder="" value="{{ $cliente->celular }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Correo</label>
                                <input type="email" class="form-control" name="correo" id="correo"
                                    aria-describedby="helpId" placeholder="" value="{{ $cliente->correo }}">
                            </div>
                        </div>
                    </div><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
            </form>
        </div>
    </div>
</div>
