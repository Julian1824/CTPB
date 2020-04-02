<!doctype html>
<html lang="en">


<?php include("database/dbi.php"); ?>
<?php   include 'includes/cerrar.php';
                      include 'includes/header.php';
                      include 'includes/Sidebar.php';
                      ?>

    <body data-sidebar="dark">

        <!-- Begin page -->
   

            <!-- ========== Left Sidebar Start ========== -->
         


            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
          
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
         <div class="card ">
            <div class="card-body">
                <div class="p-lg-0">
                    <h3>Registrar Cuentas</h3>                    
                </div>
            </div>
        </div>     
    </div>                      
                    <style>
                        .borde{
                          background-color:#A6B6B8;
                        }
                    </style>
                          
                        
                  <link rel="stylesheet" href="assets/css/Style.css">   
                
                    
      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
      <div class="container borde w-25 " style="height: 700px;" >
                            <form class="pr-4 pl-4" action="save_cuentas.php" method="POST"> 

                                <div class="form-group"> 
                             <br>
                  <label for="exampleInputEmail1 ">Nombre</label>
                  <input type="" class="form-control" id="exampleInputEmail1" name="Nombre" aria-describedby="emailHelp" placeholder="Nombre" required>
                  <br>
                  
                  
                  <label for="exampleInputEmail1">Apellido</label>
                  <input type="" class="form-control" id="exampleInputEmail1" name="Apellido" aria-describedby="emailHelp" placeholder="Apellido" required>
                  <br>
                  
                  
                  <label for="exampleInputEmail1">Cedula</label>
                  <input type="" type="date" class="form-control" name="Cedula" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cedula" required>
                  <br>
                  
                  <label for="exampleInputEmail1">Correo</label>
                  <input type="email" type="date" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo" required>
                  <br>
                
                  <label for="exampleInputEmail1">Telefono</label>
                  <input type="" type="date" class="form-control"  name="Telefono" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="telefono" required>
                  <br>
                  <label for="exampleInputEmail1">Contraseña</label>
                     <input type="password" class="form-control" id="pass1" name="password" aria-describedby="emailHelp" placeholder="Contraseña" required>
                     <div id="error1"></div>
                <br>
                <label for="exampleInputEmail1">Contraseña</label>
                     <input type="password" class="form-control" id="pass2" name="password" aria-describedby="emailHelp" placeholder="Contraseña" required>
          
		        <div id="error2"></div>
                <br>
			
                  <br>
                  <br>
                   <input type="submit" name="save_cuentas" class="btn btn-success btn-block" value="Save"><a href="Vis_proveedor.php"></a>
                   
</form>
             
            </div>
                  </div>

                
                  <?php
                include 'includes/footer.php';
            ?>

<script src="assets/js/script.js"></script>
    </body>
</html>
