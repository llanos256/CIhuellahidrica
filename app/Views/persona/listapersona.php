<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
<i class="fa fa-user"></i> nuevo admin</button>
<a class="btn btn-secondary btn-lg"  target="_blank" href="<?php echo base_url('reportes/listaadminrp.php')?>" role="button"><i class="fa fa-download"></i>Reporte</a>
<table class="table">
  <thead>
  <tr>
    <th>id</th>
    <th>nombre</th>
    <th>apellido</th>
    <th>nickname</th>
    <th>correo</th>
    <th>tipo</th>
    <th>acciones</th>
   </tr> 
  </thead>
  <tbody>
   <?php
     foreach($registros->getResult('array') as $row)
     {
    ?>
    <tr>
        <td> <?php echo $row['id']; ?> </td>
        <td> <?php echo $row['nombre']; ?> </td>
        <td> <?php echo $row['apellido']; ?> </td>
        <td> <?php echo $row['nickname']; ?> </td>
        <td> <?php echo $row['email']; ?> </td>
        <td> <?php echo $row['rol']; ?> </td>
        <td> 
         <a href="<?php echo site_url('admin/eliminar/'.$row['id']); ?>" title='eliminar' onclick="return confirm('quieres eliminar?')">  
            <button type="button" class='btn btn-danger'>  
            <i class='fa fa-trash' style='font-size:24px'> </i>
            </button>
         </a>
        
        </td>        
    </tr>
<?php
     }
   ?>
  </tbody>

  <tfoot>
  <tr>
  <th>id</th>
    <th>nombre</th>
    <th>apellido</th>
    <th>nickname</th>
    <th>correo</th>
    <th>tipo</th>
    <th>acciones</th>
   </tr> 
  </tfoot>
</table>
<?php echo view('persona/add'); ?>