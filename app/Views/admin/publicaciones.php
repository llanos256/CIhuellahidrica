<?php 
 use App\Models\publicacionesModel;

 $Mpublicaciones = new publicacionesModel();
?>

<body>
    <br>
    <form id="login-form" class="form" action="<?=site_url('publicacion/guardar')?>" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Titulo</label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Example input">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripcion</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
        </div>
        <br>
        <button type="submit" name="publicar" id="publicar" class="btn btn-primary">Publicar</button>
    </form>
    <p class="statusMsg">
    <div id="resultados2"> </div>
    </p>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

<h1>Gestion de publicaciones</h1>
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
