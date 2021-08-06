<?php
require_once __DIR__ . '../vendor/autoload.php';

include('conexion.php');

$sql="select count(id)/(select count(*) from persona where tipo_id=2)*100 as promedio
from persona
where potable=0 and tipo_id=2";
   $result=$mysqli->query($sql);//realizando la consulta en BD
   while($row=mysqli_fetch_assoc($result))
   {
       $p=$row['promedio'];
   }
   $sql2="select count(id)/(select count(*) from persona where tipo_id=2)*100 as promedio
   from persona
   where potable=1 and tipo_id=2";
      $result=$mysqli->query($sql2);//realizando la consulta en BD
      while($row=mysqli_fetch_assoc($result))
      {
          $p2=$row['promedio'];
      }

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">



<h1 align="center"><b>INFORME DE PUBLICACIONES</b><br><small>Barranquilla - Atlantico</small><br><small>Tel: 3117850182</small></h1>



<hr>


<p>Usuarios que no tiene agua potable</p>
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><h1>Porcentaje: '.$p.'</h1></h5>
    <p class="card-text">Porcentaje de usuarios sin agua potable</p>
   
  </div>
  <img src="" class="card-img-bottom" alt="">
</div>



<p>Usuarios que si tiene agua potable</p>
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><h1>Porcentaje: '.$p2.'</h1></h5>
    <p class="card-text">Porcentaje de usuarios con agua potable</p>
    
  </div>
  <img src="" class="card-img-bottom" alt="">
</div>




');
$mpdf->SetFooter('HUELLA HIDRICA|{DATE j-m-Y}|PROYECTO DE WEB');
$mpdf->Output();


