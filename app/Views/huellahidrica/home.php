<?php

use App\Models\publicacionesModel;

$Mpublicaciones = new publicacionesModel();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
  <h1>Sobre Nosotros</h1>
  <label for="">
    <p><b>“El agua es la fuerza motriz de toda la naturaleza”.</b> Así definía el elemento Leonardo Da Vinci. Y este genio no se equivocaba. La vida en la tierra sería inconcebible sin agua y, por lo tanto se convierte en el motor más potente del mundo.</p>
  </label>
  <hr>
  <hr>
  <h2>Publicaciones</h2>
  <!-- renderizar el contenido de todas las vistas -->
  <div class="card">
    <div class="card-body">
      <table class="table">
        <tbody>

          <?php
          $des = $Mpublicaciones->consulta();
          foreach ($des->getResult('array') as $row) {
          ?>

            <tr>

              <td> <h4><b><?php echo $row['titulo']; ?></b></h4>
                <input id="idpublicacion" type="hidden" value="<?php echo $row['id'] ?>">

              </td>
            </tr>
            <tr>
              <td> <?php echo $row['descripcion']; ?> </td>

            </tr>
            <tr>
              <td>

                <a href="<?= site_url('publicacion/viewdetalle/' . $row['id']) ?>">
                  <p class="card-text"><small class="text-muted"> comentarios</small></p>
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <br>
              </td>
            </tr>

          <?php
          }
          ?>


        </tbody>
      </table>
    </div>
  </div>

</body>


</html>