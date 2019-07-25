<?php

include_once('Conexion.php');
$mensaje ="";

if(isset($_POST['enviar']) ){

  $_usuario= $_POST['nombre'];
  $_mail =  $_POST['correo'];
  $contra = $_POST['contra'];
  $contra_dos = $_POST['contra_dos'];

$existente= $con->prepare("SELECT * FROM log WHERE nombre='$_usuario' AND contra='$contra'");

  if($existente->rowCount()>0){


  }


}
    ?>