<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">AGREGAR CLIENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('clientes.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!--Clave evita error -->
                <div class="modal-body">
                    <!--BS5-form-input -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="primerNombre" id="primerNombre"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Segundo Nombre</label>
                                <input type="text" class="form-control" name="segundoNombre" id="segundoNombre"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="primerApellido" id="primerApellido"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="segundoApellido" id="segundoApellido"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Tipo documento</label>
                                <select class="form-control" name="tipoDocumento" id="tipoDocumento"
                                    placeholder="Seleccione">
                                    <option selected disabled value="">Seleccione</option>
                                    <option value="CC">CC</option>
                                    <option value="CE">CE</option>
                                    <option value="T.I">T.I</option>
                                    <option value="PA">PA</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Documento</label>
                                <input type="text" class="form-control" name="numeroDocumento" id="numeroDocumento"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Celular</label>
                                <input type="text" class="form-control" name="celular" id="celular"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label">Correo</label>
                                <input type="email" class="form-control" name="correo" id="correo"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                    </div><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>

            </form>
        </div>
    </div>
</div>
<script>
    function validateForm() {
        // Obtener los valores de los campos del formulario
        var primerNombre = document.getElementById("primerNombre").value;
        var segundoNombre = document.getElementById("segundoNombre").value;
        var primerApellido = document.getElementById("primerApellido").value;
        var segundoApellido = document.getElementById("segundoApellido").value;
        var tipoDocumento = document.getElementById("tipoDocumento").value;
        var numeroDocumento = document.getElementById("numeroDocumento").value;
        var celular = document.getElementById("celular").value;
        var correo = document.getElementById("correo").value;
        // Validar que los campos no estén vacíos
        if (primerNombre === "" || segundoNombre === "" || primerApellido === "" || segundoApellido === "" ||
            tipoDocumento === "" || numeroDocumento === "" || celular === "" || correo === "") {
            alert("Todos los campos son obligatorios");
            return false; // Evitar que se envíe el formulario
        }

        // Agregar otras validaciones si es necesario

        return true; // Permitir que se envíe el formulario
    }
</script>
