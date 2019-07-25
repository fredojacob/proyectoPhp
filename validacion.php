

<?php


try{

    $con = new PDO('mysql:host=localhost;dbname=ntkadmin','root','');
    $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM log where correo=:email and contra=:contra";

    $resultado=$con->prepare($sql);
   
    $Mail = $_POST['correo'];
    $Pass = $_POST['contra'];

        $resultado->bindValue(":email",$_POST['correo']);
        $resultado->bindValue(":contra",$_POST['contra']);
    
    $resultado->execute();
// SE EJECUTA A TODO EL QUERY 

                    $registro=$resultado->rowCount();
                    $registro->fetch(PDO::FETCH_ASSOC);

                    if($registro!=0){

                        session_start();
                        header("location:principal.php");
                    }else{
                        

                        header("location:Cuenta_nueva.php");
                    }
                        



//otro codigo

            }catch(Exception $e)
            {
    
                die("Error:" . $e->getMessage("error")); 
    
            }


?>