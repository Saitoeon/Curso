<?php
    
   // echo $_GET["email"]."<br>";
    // echo  $_GET["pass"];

   // echo  $_GET["idioma"];
    /*
    $lenguaje = $_GET["idioma"];
    if($lenguaje == "en"){
        echo "Hello world";
    }else{
        echo "Hola mundo!";
    }
    */
    $email = $_POST["email"];
    $password = $_POST["pass"];
    if($email == "hugeek@gmail.com"){
        if($password =="contrasena"){
            echo "Bienvenido Hugeek!";
        }
    }
?>