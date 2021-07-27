<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registro de alumnos</title>
        <link rel="stylesheet" href="estilos.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- CSS INTERNO -->
    <style>
    .body{
    margin:0;
    padding:0;
    font-family: Arial;
    
    }

    .navbar{
    background-color: #fff;
    padding: 20px 0px;
    }

    .navbar-nav li:hover>ul.dropdown-menu{
    display: block;
    }

    .dropdown-submenu{
    position: relative;
    }

    .dropdown-submenu>.dropdown-menu{
    top:0;
    margin-top:-5px;
    left:100%;
    }


    </style>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LEMPIS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Pruebamenu.html">Inicio</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Configuracion
              </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">Rol</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="RolNuevo.php">Nuevo Rol</a></li>
                      </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">Usuario</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Registrar Usuario</a></li>
                      <li><a class="dropdown-item" href="#">Consulta Usuario</a></li>
                      <li><a class="dropdown-item" href="#">Eliminar Usuario</a></li>
                    </ul>
                  </li>
                </ul>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Catálogos
                  </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Alumno</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Registro de Alumno</a></li>
                            <li><a class="dropdown-item" href="#">Consulta General</a></li>
                            <li><a class="dropdown-item" href="#">Eliminar Usuario</a></li>
                          </ul>
                      </li>
                    </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav></h1>

    <!-- FORMULARIO DEL ALUMNO -->
    <!-- FORMULARIO DEL ALUMNO -->
        <form method="POST">
            <h1>Nuevo Alumno</h1>
            <input type="number" name="DNI_alum"  placeholder="Su matricula"><br>
            <br><input type="text" name="Nombre" max="20" placeholder="Su nombre"><br>
            <br><input type="text" name="Apellido" max="20" placeholder="Inserte apellidos"><br>
            <br><input type="text" name="Direccion" max="50" placeholder="su direccion ej. el coloso"><br>
            <br><input type="text" name="Poblacion" max="50" placeholder="ej. Acapulco. Gro"><br>
            <br><input type="date" name="F_Nacimiento"><br>
            <br><input type="number" name="Cod_Postal" placeholder="codigo postal"><br>
            <br><input type="number" name="Telefono" placeholder="Su telefono"><br>
            <br><input type="text" name="Curp" max="18" placeholder="su curp"><br>
            <br><input type="submit" name="registrar"><br>
        </form>
        <?php
            include("registraralum.php"); //Llama al documento donde se registran en la base de datos
        ?>
    </body>
</html>