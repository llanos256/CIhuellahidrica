<?php
require_once __DIR__ . '../vendor/autoload.php';

include('conexion.php');

$sql="select p.nombre, p.apellido,p.email,p.nickname , t.rol
from persona p
inner join tipo t on p.tipo_id = t.id
where tipo_id =2";
   $result=$mysqli->query($sql);//realizando la consulta en BD
   
   $html='
   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    
    
  <h1 align="center"><b>LISTA DE ADMINISTRADORES</b><br><small>Barranquilla - Atlantico</small><br><small>Tel: 3117850182</small></h1>
    
    

<hr>
<p></p>

<table class="table table-hover" border="1"  width="100%">
<thead>
<tr style="background-color:#C8C6C6;color:#000000;">
 <th width="25%"> NOMBRE </th>
 <th width="35%"> EMAIL  </th>
 <th widht="30%"> NOMBRE DE USUARIO </th>
 <th widht="10%"> ROL </th>
</tr>
</thead>
<tbody>
  ';
  while($row=mysqli_fetch_assoc($result)){
    $html .='
    <tr>
      <td> '.$row["nombre"].' '. $row['apellido'].' </td>
      <td> '.$row["email"].' </td>
      
      <td> '.$row["nickname"].' </td>
      <td> '.$row["rol"].' </td>

     </tr> 
   '; 
}
    $html .='</tbody> </table>
    
    ';

$mpdf = new \Mpdf\Mpdf();
$mpdf->SetFooter('HUELLA HIDRICA|{DATE j-m-Y}|PROYECTO DE WEB');
$mpdf->WriteHTML($html);
$mpdf->Output();