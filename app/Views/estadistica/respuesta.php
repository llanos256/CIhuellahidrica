<?php

$request = \Config\Services::request();
$R1 = $request->getPost('R1');
$R2 = $request->getPost('R2');
$R3 = $request->getPost('R3');
$R4 = $request->getPost('R4');
$R5 = $request->getPost('R5');
$R6 = $request->getPost('R6');
$R7 = $request->getPost('R7');
$resultado = ($R1 * 30 + $R2 * 1.5 + $R3 * 15 + $R4 * 10 + $R5 * 0.5 + $R6 * 200 + $R7 * 10);
//echo $resultado;
?>
<br>
<div class="card" style="margin-left:auto;margin-right:auto;width: 60rem;">
    <div class="card-body">
        <h1 align="center">Resultados de tu consumo</h1>
        <br>
        <?php if ($resultado <= 700) { ?>

            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Felicidades su consumo es excelente :)!</h4>
                <p>Su resultado es: <?php echo $resultado; ?> litros</p>
                <hr>
                <a href="<?php echo site_url('noticia') ?>">
                    <p class="mb-0">Noticias.</p>
                </a>
            </div>

        <?php
        } elseif ($resultado > 700 && $resultado <= 800) {
        ?>
            <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">Su consumo es aceptable pero podria mejorar ._.!</h4>
                <p>Su resultado es: <?php echo $resultado; ?> litros</p>
                <hr>
                <a href="<?php echo site_url('noticia') ?>">
                    <p class="mb-0">Noticias.</p>
                </a>
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Su consumo es inaceptabel :(!</h4>
                <p>Su resultado es: <?php echo $resultado; ?> litros</p>
                <hr>
                <a href="<?php echo site_url('noticia') ?>">
                    <p class="mb-0">Noticias.</p>
                </a>
            </div>
        <?php
        } ?>
    </div>
</div>