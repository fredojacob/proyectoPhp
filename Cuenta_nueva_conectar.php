<?php

include_once('Conexion.php');


if(isset($_POST['enviar'])){
    $nombre = $_POST["nombre"];
    $Correo = $_POST["correo"];
    $Contra = $_POST["contra"];
  
 
    $sth = $con->prepare("INSERT INTO log (nombre, correo, contra) 
    VALUES (:nombre, :correo, :contra)");    

    $sth->execute(array(
        ':nombre'=> $nombre,
        ':correo'=> $Correo,
        ':contra'=> $Contra));

    
        header('Location: index.php');

    }else
               echo"erorr porfavor revise codgo";

    ?>
