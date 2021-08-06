<?php

use App\Models\PreguntasModel;

$Mpreguntas = new PreguntasModel();

$consulta = $Mpreguntas->consulta();
            foreach ($consulta->getResult('array') as $data) {
                // $id1=$data['id'][$i];
                // $id2=$data['id'][$i];
                // $id3=$data['id'][$i];
                // $id4=$data['id'][$i];
                // $id5=$data['id'][$i];
                // $p1=$data['descripcion'][$i];
                // $p2=$data['descripcion'][$i];
                // $p3=$data['descripcion'][$i];
                // $p4=$data['descripcion'][$i];
                // $p5=$data['descripcion'][$i];
                //$idc=[$data['id']];
                //$des=[$data['descripcion']];
            }
?>
<h1>Realizar Encuesta</h1>

<label for="">
    <p>El propósito de esta encuesta es  proporcionar a las personas una herramienta capaz de estimar que tanto consumo de agua producen comparándose con el gasto  de agua por persona promedio, cuánto se necesita para que sea sostenible para todos y brindar los conocimientos y procesos de cómo gestionar mejor el agua.
</p>
</label>
<hr>
<form method="post" action="<?php echo site_url('estadistica/respuesta');?>">
    <div class="card" style="margin-left:auto;margin-right:auto;width: 60rem;">
        <div class="card-body">
                <fieldset>
                    <label>¿Cuántas veces te duchas a la semana?</label>
                    <br><br>
                     <input name="R1" type="number">
                </fieldset>
                <br>
                <hr>
                <br>
                <fieldset>
                    <label>¿Cuántas veces a la semana te lavas las manos?</label>
                    <br><br>
                     <input name="R2" type="number">
                </fieldset>
                <br>
                <hr>
                <br>
                <fieldset>
                    <label>¿Cuántas veces limpias tu casa a al semana? </label>
                    <br><br>
                     <input name="R3" type="number">
                </fieldset>
                <br>
                <hr>
                <br>
                <fieldset>
                    <label>¿Cuántas veces usas el inodoro a la semana?</label>
                    <br><br>
                     <input name="R4" type="number">
                </fieldset>
                <br>
                <hr>
                <br>
                <fieldset>
                    <label>¿Cuántas vasos de agua bebes a la semana?</label>
                    <br><br>
                     <input name="R5" type="number">
                </fieldset>
                <br>
                <hr>
                <br>
                <fieldset>
                    <label>¿Cuántas veces usas lavadora a la semana?</label>
                    <br><br>
                     <input name="R6" type="number">
                </fieldset>
                <br>
                <hr>
                <br>
                <fieldset>
                    <label>¿Cuántas veces lava los platos a la semana?</label>
                    <br><br>
                     <input name="R7" type="number">
                </fieldset>
                <br>
                <hr>
                <br>
                

            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input class="btn btn-primary" type="submit" value="Enviar" onclick="hola()">
            </div>
        </div>
    </div>
    <br>
    <br>
</form>

<script>
function hola(){
    var id = [$('#h').val()];
    console.log(id);
    //event.preventDefault();

}
//h();
</script>