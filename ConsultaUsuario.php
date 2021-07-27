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
      <th scope="col">ID USUARIO</th>
      <th scope="col">ID ROL</th>
      <th scope="col">NICK NAME</th>
      <th scope="col">PASSWORD</th>
    
</thead>
<tbody>

<?php
include("PruebaConex.php");
$consulta=$conex-> query("SELECT*FROM Usuario");
while ($datos=$consulta->fetch_assoc()){
    ?>
    <tr class="table-active">
        <td><?php echo $datos["UsuarioID"];?>
        <td><?php echo $datos["UsuarioRolID"];?></td>
        <td><?php echo $datos["UsuarioNickName"];?></td>
        <td><?php echo $datos["UsuarioPasswd"];?>
    </tr>


<?php
} ?>
</tbody>

</table>
    <form action="Pruebamenu.html">
        <input type="submit" value="Volver" />
</form>