<!doctype html>
<html lang="en">


<?php include("database/db.php"); ?>
<?php   include 'includes/cerrar.php';
                      include 'includes/header.php';
                      include 'includes/Sidebar.php';?>

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
                    <h3>Registrar proveedores</h3>                    
                </div>
            </div>
        </div>     
    </div>                      
                    <style>
                        .borde{
                          background-color:#A6B6B8;
                        }
                    </style>
                          

                  
                      
      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
      <div class="container borde w-25 " style="height: 700px;" >
                            <form class="pr-4 pl-4" action="save_task.php" method="POST"> 

                                <div class="form-group"> 
                             <br>
                  <label for="exampleInputEmail1 ">Nombre</label>
                  <input type="" class="form-control" id="exampleInputEmail1" name="nombre" aria-describedby="emailHelp" placeholder="Nombre" required> 
                  <br>
                  
                  
                  <label for="exampleInputEmail1">Apellido</label>
                  <input type="" class="form-control" id="exampleInputEmail1" name="apellido" aria-describedby="emailHelp" placeholder="Apellido" required>
                  <br>
                  
                  
                  <label for="exampleInputEmail1">Cedula</label>
                  <input type="" type="date" class="form-control" name="cedula" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="cedula" required>
                  <br>
                
                  <label for="exampleInputEmail1">Telefono</label>
                  <input type="" type="date" class="form-control"  name="telefono" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="telefono" required>
                  <br>
                <label for="exampleInputEmail1">nombre_empresa</label>
                  <input type="" type="date" class="form-control" name="nombre_empresa" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nombre_empresa" required>
                  <br>
                  <label for="exampleInputEmail1">direccion_empresa</label>
                  <input type="" type="date" class="form-control" name="direccion_empresa"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="direccion_empresa" required>
                  <br>
                  <label for="exampleInputEmail1">telefono_empresa</label>
                  <input type="" type="date" class="form-control" name="telefono_empresa"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="telefono_empresa" required>
                  <br>
                   <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save">
                  
</form>
             
            </div>
                  </div>

                
                  <?php
                include 'includes/footer.php';
            ?>
    </body>
</html>
