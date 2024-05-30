<?php
 
    $conexion = new mysqli("localhost","id21814487_gustavoher","Gu@lheoc8689","id21814487_extreamfin");
        if($conexion){
            echo "la gestion fue exitosa !!";
        }else{
            echo "Fallo la gestion";
        }
?>