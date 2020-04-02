

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

          
          
            <div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
    <h4 class="d-flex align-self-center">Editar Productos</h4>

                   
                    
                </div>
            </div>
        </div>     
    </div> 

    <style>
        .borde{
          background-color:rgb(233, 232, 232);
         
        }
    </style>
          

    <div class="container borde w-50" style="height: 600px;" >
      
            <form class="pr-4 pl-4 ">
                <div class="form-group"> 
             <br>
  <label for="exampleInputEmail1 ">Nombre Producto</label>
  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre Producto">
  <br>
  
  
  <label for="exampleInputEmail1">Código Producto</label>
  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Código Producto">
  <br>
  
  
  <label for="exampleInputEmail1">Cantidad Producto</label>
  <input type="email" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cantidad Producto">
  <br>
  
  <label for="exampleInputEmail1">Fecha de entrada</label>
  <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fecha de entrada">
  <br>
  
  
  <label for="exampleInputEmail1">Empresa</label>
  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Empresa">
  <br>
 
  

  <br>
     <a href="De_devolucion.php"><input type="button" value="Guardar" class="btn btn-primary w-100 float-md-center "></a>

</form>

</div>
  </div>
            <?php
                include 'includes/footer.php';
            ?>
    </body>
</html>
