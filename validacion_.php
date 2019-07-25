<?php
include_once("Conexion.php");


    if(!empty($_POST['correo']) && !empty($_POST['contra']))
    {

        $records = $con->prepare("SELECT id, nombre, correo, contra FROM log WHERE correo=:email and contra=:contra");
        $records->bindParam(':email', $_POST['correo']);
        $records->bindParam(':contra', $_POST['contra']);
      
        $records->execute();
        
        $res = $records->fetch(PDO::FETCH_ASSOC);
        

    

        $registro=$records->rowCount();

        if($registro!=0 ){

            session_start();
            header("location:bd.php");
        }else{
            

            header("location:error.php");
        }
            

    }





?> 