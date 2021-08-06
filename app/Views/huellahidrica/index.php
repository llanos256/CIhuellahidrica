<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <title>huellahidrica</title>

</head>
<!-- inicio del navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url('home') ?>">
    huellahidrica
    
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav w-100 justify-content-center">
        <li class="nav-item active">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url('home') ?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('noticia') ?>">Noticia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('estadistica') ?>">Encuesta</a>
        </li>
        <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
      </ul>
      <?php
      if(session()->get('userid'))
              {
                ?>
              <!-- --si inicia sesión -->
              
              <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown">
                    <i class="fa fa-user"></i> <?=session()->get('username');?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-end"> 
                      <li ><a class="dropdown-item" href="#">perfil @<?=session()->get('user');?></a></li>
                      <li ><hr class="dropdown-divider"></li>
                      <li ><hr class="dropdown-divider"></li>
                      <li ><a class="dropdown-item" href="<?=site_url('auth/logout');?>">cerrar sesión</a></li>
                    </ul>
               
                    
              </div>
                <?php }else{?>
                    <form class="d-flex">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <a class="btn btn-outline-success" href="<?php echo site_url('auth') ?>">iniciar_sesión</a>
               <?php } ?>


      </form>
    </div>
  </div>
</nav>

<body>

  <div class="container">
    <!-- renderizar el contenido de todas las vistas -->
    <?php
    if (isset($contenido)) {
      echo view($contenido);
    } else
      echo '<h1> idelcoco </h1>';
    ?>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>