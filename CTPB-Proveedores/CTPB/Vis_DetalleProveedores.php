<!doctype html>
<html lang="en">

<?php
                    include 'includes/header.php';
            ?>

    <body data-sidebar="dark">

        <!-- Begin page -->
   

            <!-- ========== Left Sidebar Start ========== -->
         
<?php
                    include 'includes/Sidebar.php';
            ?>

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
          
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="d-flex align-self-center">Editar Proveedores</h4>

                                   
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                   

                    </div> <!-- container-fluid -->

                    

                    <style>
                        .borde{
                          background-color:rgb(233, 232, 232);
                         
                        }
                    </style>
                          

                    <div class="container borde w-50" style="height: 700px;" >
                      
                            <form class="pr-4 pl-4 ">
                                <div class="form-group"> 
                             <br>
                  <label for="exampleInputEmail1 ">Nombre</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                  <br>
                  
                  
                  <label for="exampleInputEmail1">Apellido</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apellido">
                  <br>
                  
                  
                  <label for="exampleInputEmail1">Correo</label>
                  <input type="email" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
                  <br>
                  
                  <label for="exampleInputEmail1">Fecha De Nacimiento</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fecha De Nacimiento">
                  <br>
                  
                  
                  <label for="exampleInputEmail1">País</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="País">
                  <br>
                  <label for="exampleInputEmail1">Empresa</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Empresa">
                  <br>
                  
               
                  
                
                  <a href="Vis_proveedor.php"><input type="button" value="Guardar" class="btn btn-primary w-100 float-md-center "></a>

          
              </form>
             
            </div>
                  </div>

                
            <?php
                include 'includes/footer.php';
            ?>
    </body>
</html>
