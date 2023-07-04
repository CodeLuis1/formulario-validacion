<?php
if($_POST){
        $name = $_POST["name"];
        $pass = $_POST["pass"];

        switch(true){
            case $name == "luis" && $pass == "luis";
            case $name == "juan" && $pass == "juan";
            case $name == "maria" && $pass == "maria";
            case $name == "andres" && $pass == "andres";
           
            echo"<script> alert('bienvenido a nuestra pagina $name'); window.location='bienvenida.html'</script>";
          break;
            default:
            echo"<script> alert('usuario no existe'); window.location='login.html'</script>";
        }
    }

    ?>