<?php
 
    include("abre.php");
    $Nombre     = $_POST['Nombre'];
    $Apellidos  = $_POST['Apellidos'];
    $Calle     = $_POST['Calle'];
    $rating     = $_POST['rating'];
 
    $consulta  = "INSERT INTO  usuarios(Nombre, Apellidos, Calle, rating) VALUES('$Nombre','$Apellidos','$Calle','$rating')";
 
    if($conexion->query($consulta) === TRUE){
        header("Location: index.html");
    }else{
        echo  "Error: " . $consulta . "<br>" . $conexion->error;
    }
 
    $conexion->close();

?>