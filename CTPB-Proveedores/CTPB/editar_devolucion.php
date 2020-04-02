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
    <h4 class="d-flex align-self-center">Editar Devolución</h4>

                   
                    
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
  <label for="exampleInputEmail1 ">Número Factura</label>
  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Número factura">
  <br>
  
  
  <label for="exampleInputEmail1">Cantidad Devolución</label>
  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cantidad devolución">
  <br>
  
  
  <label for="exampleInputEmail1">Fecha Devolución</label>
  <input type="email" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fecha Devolución">
  <br>
  
  <label for="exampleInputEmail1">Repocisión Devolución</label>
  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Repocisión Devolución">
  <br>
  
  
  <label for="exampleInputEmail1">Causa Devolución</label>
  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Causa Devolución">
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
