<div class="modal fade" id="modalForm">
    <div class="modal-dialog modal-lg">
        <!--prueba con: modal-dialog  modal-lg,modal-sm , modal-xl -->
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick="cerrar();">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4><i class='glyphicon glyphicon-edit'></i> Nuevo Admin </h4>
            </div>
            <!-- Modal Body -->
            <form method="post" name="formnew" id="formnew">
                <div class="modal-body">
                    <p class="statusMsg">
                    <div id="resultados"> </div>
                    </p>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class=""></i>
                            </div>
                            <input type="text" class="form-control" name="nombre" placeholder="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Apellido:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class=""></i>
                            </div>
                            <input type="text" class="form-control" name="apellido" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>nickname:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class=""></i>
                            </div>
                            <input type="text" class="form-control" name="nickname" placeholder="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>correo:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class=""></i>
                            </div>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class=""></i>
                            </div>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>

                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">

                    <div class='col-md-6'>
                        <button type="submit" class="btn btn-primary" id="guardar">Guardar</button>
                    </div>

                    <div class='col-md-4'>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="cerrar();">Cerrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--  END  Fomrulario Add    -->

<script type="text/javascript">
    function removeMessage() {
        setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                //$(this).remove();
                $(".alert").alert('close');
            });
        }, 5000);
    }

    function limpiar() {
        $('#formnew').find('input:text,input:email, input:password, input:file, select, textarea').val('');
        $('#correo').val('');
    }

    function cerrar() {
        location.reload();
    }

    $('#formnew').submit(function(event) {
        var parametros = $('#formnew').serialize(); //obtiene todos los campos con sus datos del form
        console.log(parametros);
        var salida = "";
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('persona/guardar'); ?>",
            data: parametros,
            beforeSend: function() {
                $('#resultados').show();
            },
            error: function() {
                $('#resultados').html(salida);
            },
            success: function(datos) {
                $('#resultados').html(datos);
                //limpiar();
                $('#formnew').reset();
                removeMessage();

            }
        });
        event.preventDefault();

    })
</script>