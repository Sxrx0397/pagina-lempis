<?php
$conexion = new mysqli();
$conexion->connect('localhost','root','Sanmysunshine97','Escuela');
     if($conexion->connect_error)
{        
          header("location:Error.php");
}
else {
	header("location:Pruebamenu.html");
}
?>