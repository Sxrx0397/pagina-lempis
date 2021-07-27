<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="table-responsive">
    <table class="table table-bordered">
<thead>
  
<table class="table table-striped">
  <thead>
  <tr   class="bg-primary">
      <th scope="col">Matricula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Dirección</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Población</th>
      <th scope="col">Cod_Postal</th>
      <th scope="col">Telefono</th>
      <th scope="col">CURP</th>
      <th scope="col">Acción</th>  
</thead>
<tbody>

<?php
include("PruebaConex.php");
$consulta=$conex-> query("SELECT*FROM alumnos");
while ($datos=$consulta->fetch_assoc()){
    ?>
    <tr class="table-active">
        <td><?php echo $datos["DNI_alum"];?></td>
        <td><?php echo $datos["Nombre"];?></td>
        <td><?php echo $datos["Apellido"];?></td>
        <td><?php echo $datos["Direccion"];?></td>
        <td><?php echo $datos["F_Nacimiento"];?></td>
        <td><?php echo $datos["Poblacion"];?></td>
        <td><?php echo $datos["Cod_Postal"];?></td>
        <td><?php echo $datos["Telefono"];?></td>
        <td><?php echo $datos["CURP"];?></td>
        <td>
          <a class="link_delete" href ="ElimAlum.php?DNI_alum=<?php echo $datos["DNI_alum"]; ?>"> Eliminar </a>
      </td>
    </tr>


<?php
} ?>
</tbody>

</table>
    <form action="Pruebamenu.html">
        <input type="submit" value="Volver" />
</form>