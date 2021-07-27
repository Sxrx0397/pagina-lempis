<?php
if (!empty($_GET["DNI_alum"])){
    include("PruebaConex.php");
    $DNI_alum = $_GET["DNI_alum"];

    $eliminar = $conex->query("DELETE FROM alumnos WHERE DNI_alum = '$DNI_alum'");
    if ($eliminar){
        echo "Eliminado Correctamente";

    }else{
        echo "Error al eliminar";
    }
}
?>