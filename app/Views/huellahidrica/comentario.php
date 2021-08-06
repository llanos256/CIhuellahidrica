<?php

use App\Models\ComentariosModel;

$Mcomentario = new ComentariosModel();
foreach ($consulta->getResult('array') as $data) {
    $idpublicacion = $data['id'];
    $titulo = $data['titulo'];
    $descripcion = $data['descripcion'];
}
?>
<div class="card">
    <div class="card-body">
        <table class="table table-hover table-striped">

            <tr>

                <td>
                    <h4><b><?php echo $titulo; ?></b></h4>
                    <input id="idpublicacion" type="hidden" value="<?php echo $idpublicacion ?>">

                </td>
            </tr>
            <tr>
                <td> <?php echo $descripcion; ?> </td>

            </tr>
        </table>
        <form action="<?= site_url('comentarios/guardar') ?>" method="post">
            <div class="input-group mb-3">
                <input name="idpublicacion" id="idpublicacion" type="hidden" value="<?php echo $idpublicacion ?>">
                <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="comentar" aria-label="Recipient's username" aria-describedby="button-addon2">
                <input class="btn btn-success" type="submit" name="e" id="e" value="Enviar">
            </div>
        </form>
        <a href="<?= site_url('') ?>">
            <p class="card-text"><small class="text-muted">Atras</small></p>
        </a>


    </div>
</div>
<div class="card">
    <div class="card-body">
        <table class="table">
            <?php
            $co = $Mcomentario->consulta($idpublicacion);
            foreach ($co->getResult('array') as $data) {
            ?>
                <tr>
                    <td>
                        <p class="card-text"><small class="text-muted"><b><?php echo $data['nombre'] ?></b> @<?php echo $data['nickname'] ?></small></p>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $data['descripcion'] ?></td>
                </tr>


            <?php
            }
            ?>
        </table>
    </div>
</div>
<script>
    $('').click(function(e) {
        var descrip = $('#descripcion').val();
        var idpubli = $('#idpublicacion').val();
        console.log(descrip);
        console.log(idpubli);
        $.ajax({
            type: 'post',
            url: '<?= site_url('comentarios/guardar') ?>',
            data: {
                'descripcion': descrip,
                'idpublicacion': idpubli
            },
            success: function(data) {
                alert("comentario exitoso")
            }
        })
        e.preventDefault();
    })
</script>