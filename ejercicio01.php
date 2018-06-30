<?php

    /*
        Autor: hugeek
        Fecha: 30/06/18
    */

    $txt = "Bienvenidos a PHP!!";
    echo $txt; // imprimir en pantalla
    
    $numero = 20;
    echo "<br>";
    //echo $numero;
    $i= 1;
    /*
    while($i <= $numero){
        //printf($i);
        echo "Número:".$i."<br>";
        $i++;
    }
    */
    
    $animales = ["perro", "gato", 2.3, "cocodrilo"];
  
    foreach($animales as $animal){
        echo $animal."<br>";
    }
    
  echo "Servidor Hugeek";

  /*
    var_dump($animales);
    echo "<br>";
    for($i=0; $i<3; $i++){
         echo $animales[$i]." ";
    }*/
?>