<?php

    include_once("Conexion.php");
?>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nektech S.A</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>



    <!-- Main Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="">
              <h4 class="post-title">
              </h4><br>
              <h3 class="post-subtitle">
              
              </h3>
            </a>

            <p class="post-meta">Posted by
              <a href="#">Freddy Gonzalez</a>
              on September 10, 2018  <a href="index.php"> will be back </a></p> 

          </div>
          <hr>

             <hr>
                                <div clase="container">	
                                <div class= "form-group boxlogin "> 
                            
                                    <form method="POST" action="Cuenta_nueva_conectar_dos.php"><br>
                                
                                    <h4 class="text-center sitie_title animated fadeInDown" >Usuario </h4>
                                    <input type="text" name="nombre"  class="form-control"><br>
                                                                        
                                    <h4 class=" text-center itie_title animated fadeInDown">Email</h4>
                                    <input type="text" name="correo" class="form-control"><br>

                                    <h4 class=" text-center itie_title animated fadeInDown">Contrasena </h4>
                                    <input type="password" name="contra" class="form-control"><br>

                                    <h4 class="text-center sitie_title animated fadeInDown" >Confirmar contrasena</h4>
                                    <input type="password" name="contra_dos"  class="form-control"><br>
                                    

                                    
                                    
                                    
                                    <input  type="submit" name ="enviar" value="enviar" class="btn btn-block btn-primary form-control " >
                                
                                    </form>
                                    </div>
                                </div>
           
        
          <hr>

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong">
  Politicas de Usos
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
      </div>
      <div class="modal-body">
        Nosotros en Nektech estas compretidos con nuestros a clientes a ofrecer un sistema de muy alta 
        calidad cualquier inconveniente u anomalia dentro del sistema favor de reportarlo 
        por medio de los siguientes metodos mail o directamente a nuestro pbx
      </div>
      <div class="modal-footer">
        <center>
        <button type="button" class="btn btn-danger center" data-dismiss="modal">Entendido</button>
     </center>  
    </div>
    </div>
  </div>
</div>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Derechos reservados 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>


