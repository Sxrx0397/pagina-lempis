<?php

include("PruebaConex.php"); //este documento tenerlo a la vista ya que comprueba la conexion a la base de datos

if(isset($_POST['registrar'])){
        if(strlen($_POST['DNI_alum']) >= 1 &&                  //recuerden cambiar las variables de acuerdo a su base de datos
        strlen($_POST['Nombre']) >= 1 &&
        strlen($_POST['Apellido']) >= 1 &&
        strlen($_POST['Direccion']) >= 1 &&
        strlen($_POST['Poblacion']) >= 1 &&
        strlen($_POST['F_Nacimiento']) &&
        strlen($_POST['Cod_Postal']) >= 1 &&
        strlen($_POST['Telefono']) >= 1 && 
        strlen($_POST['Curp']) >= 1){

            $DNI_alum = trim($_POST['DNI_alum']);                 //igual aqui tambien las variables de acuerdo a su base de datos
            $nombre = trim($_POST['Nombre']);
            $apellido = trim($_POST['Apellido']);
            $direccion = trim($_POST['Direccion']);
            $poblacion = trim($_POST['Poblacion']);
            $f_nacimiento = trim($_POST['F_Nacimiento']);
            $cod_postal = trim($_POST['Cod_Postal']);
            $telefono = trim($_POST['Telefono']);
            $curp = trim($_POST['Curp']);

            //Para la seccion de insert que esta abajo van a phpmyadmin, seleccionan la tabla, arriba le dan en SQL y abajo en letras grandes
            //Le dan clic en INSERT y lo pegan despues de $consulta y tiene que quedar similar
            $consulta = "INSERT INTO alumnos(DNI_alum, Nombre, Apellido, Direccion, Poblacion, F_Nacimiento, Cod_Postal, Telefono, Curp) 
            VALUES ('$DNI_alum', '$nombre', '$apellido', '$direccion', '$poblacion', '$f_nacimiento', '$cod_postal', '$telefono', '$curp')";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
                ?> 
                <h3 class="ok">¡Se ha registrado correctamente!</h3>
               <?php
            } else {
                ?> 
                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
        }
    }else {
        ?> 
        <h3 class="bad">¡Por favor complete los campos!</h3>
        <?php
    }     
}