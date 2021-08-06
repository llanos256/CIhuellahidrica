<?php
require_once __DIR__ . '../vendor/autoload.php';

include('conexion.php');

$sql="select p.titulo, count(c.id) as comentarios, pe.nombre, pe.apellido
from publicaciones p 
inner join comentarios c on p.id = c.publicaciones_id
inner join persona pe on p.persona_id = pe.id
group by p.titulo";
   $result=$mysqli->query($sql);//realizando la consulta en BD
   
   $html='
   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    
    
  <h1 align="center"><b>INFORME DE PUBLICACIONES</b><br><small>Barranquilla - Atlantico</small><br><small>Tel: 3117850182</small></h1>
    
    

<hr>
<br>
   <table class="table table-hover" border="1"  >
     <thead>
     <tr style="background-color:#C8C6C6;color:#000000;">
      <th> TITULO </th>
      <th> NOMBRE  </th>
      <th> COMENTARIOS </th>
     </tr>
     </thead>

   <tbody>
       ';
       while($row=mysqli_fetch_assoc($result)){
       $html .='
       <tr>
         <td> '.$row["titulo"].' </td>
         <td> '.$row["nombre"].' '. $row['apellido'].' </td>
         <td> '.$row["comentarios"].' </td>

        </tr> 
    
        '; 
        
    }
    $html .='</tbody> </table>
    
    ';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->SetFooter('HUELLA HIDRICA|{DATE j-m-Y}|PROYECTO DE WEB');
$mpdf->Output();