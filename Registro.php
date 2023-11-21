<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-body-tertiary fixed-top" > 
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">BookCenter</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Perfil</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" href="#">Editorial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Registro.php">Registrar Libro</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Género
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="generoR.html">Romántico</a></li>
                    <li><a class="dropdown-item" href="generoT.html">Terror</a></li>
                    <li><a class="dropdown-item" href="generoM.html">Mangas</a></li>
                    <li><a class="dropdown-item" href="generoP.html">Policial</a></li>
                    <li><a class="dropdown-item" href="generoFn.html">Fantástico</a></li>
                    <li><a class="dropdown-item" href="generoEd.html">Educativo</a></li>
                    <li><a class="dropdown-item" href="generoMusic.html">Musical</a></li>
                    <li><a class="dropdown-item" href="generodr.html">Drama</a></li>
                    <li><a class="dropdown-item" href="generoAut.html">Autoayuda</a></li>
                    <li><a class="dropdown-item"  href= "generocok.html">Cocina</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
</nav>
<br> <br> <br>
    <form action="" method="post">
 nombre   <input type="text" name="Nombre" required>
 fecha de creacion  <input type="date" name="Creacion" required>
 fecha de registro   <input type="date" name="Registro" required>
 genero del libro   <input type="text" name="Genero" required>
 descripcion   <input type="text" name="Descripcion" required>
 ISBN   <input type="text" name="ISBN" required>
 Escritor   <input type="text" name="Escritor" required>
 Foto   <input type="file" name="Foto" required>
 Precio   <input type="number" name="Precio" required>
 PUBLICAR   <input type="submit" name="registrar" required>
    </form>
    <a href="index.html">
    <button>home</button>
</a>
 <?php
$servidor="localhost";
$usuario="root";
$clave="";
$base="bookcenter";
$conexiones=mysqli_connect($servidor, $usuario, $clave, $base); 
if (isset($_POST{'registrar'})){
    $Nombre=$_POST["Nombre"];
$Creacion=$_POST["Creacion"];
$Registro=$_POST["Registro"];
$Genero=$_POST["Genero"];
$Descripción=$_POST["Descripcion"];
$isbn=$_POST["ISBN"];
$Escritor=$_POST["Escritor"];
$Foto=$_POST["Foto"];
$Precio=$_POST["Precio"];
$libro= "insert into registro (Nombre, Creacion, Registro, Genero, Descripcion, ISBN, Escritor, Foto, Precio) values ('$Nombre','$Creacion','$Registro','$Genero', '$Descripción', '$isbn', '$Escritor', '$Foto', '$Precio')";
$consulta= mysqli_query($conexiones, $libro);
}
 ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>