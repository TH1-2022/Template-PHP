<?php 
    require "../utils/autoload.php";

    if(isset($_SESSION['autenticado'])){
        echo "Bienvenido " . $_SESSION['nombreUsuario'];
        echo "<br /><a href='/cerrarSesion.php'>Salir</a>";
    }
    else 
        header("Location: /login.php");
   