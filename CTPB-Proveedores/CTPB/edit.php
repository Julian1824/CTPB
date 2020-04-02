<?php include("database/db.php");



if  (isset($_GET['id_proveedor'])) {
  $id_proveedor = $_GET['id_proveedor'];
  $query = "SELECT * FROM proveedores WHERE id_proveedor=$id_proveedor";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $cedula = $row['cedula'];
    $email = $row['email'];
    $telefono = $row['telefono'];
    $nombre_empresa = $row['nombre_empresa'];
    $direccion_empresa = $row['direccion_empresa'];
    $telefono_empresa = $row['telefono_empresa'];
    
  }
}

if (isset($_POST['update'])) {
  $id_proveedor = $_GET['id_proveedor'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $cedula = $_POST['cedula'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $nombre_empresa = $_POST['nombre_empresa'];
  $direccion_empresa = $_POST['direccion_empresa'];
  $telefono_empresa = $_POST['telefono_empresa'];
  

  $query = "UPDATE proveedores set nombre = '$nombre', apellido  = '$apellido',cedula= '$cedula',email= '$email',telefono= '$telefono', nombre_empresa= '$nombre_empresa',direccion_empresa= '$direccion_empresa',telefono_empresa= '$telefono_empresa' WHERE id_proveedor=$id_proveedor";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'La nota se actualizo correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: Vis_proveedor.php');
}

?>
<?php include('includes/header.php'); ?>

<body data-sidebar="dark">

<!-- Begin page -->


    <!-- ========== Left Sidebar Start ========== -->
 
<?php
            include 'includes/Sidebar.php';
    ?>

<div class="container borde w-25 pt-5 " style="height: 800px;">

<form action="edit.php?id_proveedor=<?php echo $_GET['id_proveedor']; ?>" method="POST">
                                
                                <div class="form-group"> 
                             <br>
                  <label for="exampleInputEmail1 ">Nombre</label>
                  <input type="" class="form-control" id="exampleInputEmail1" name="nombre" value="<?php echo $nombre; ?>" aria-describedby="emailHelp" placeholder="Nombre">
                  <br>
                  
                  
                  <label for="exampleInputEmail1">Apellido</label>
                  <input type="" class="form-control" id="exampleInputEmail1" name="apellido" value="<?php echo $apellido; ?>" aria-describedby="emailHelp" placeholder="Apellido">
                  <br>
               
                  <label for="exampleInputEmail1">Cedula</label>
                  <input type="" type="date" class="form-control" name="cedula" id="exampleInputEmail1" value="<?php echo $cedula; ?>" aria-describedby="emailHelp" placeholder="cedula">
                  <br>
              
                  <label for="exampleInputEmail1">Telefono</label>
                  <input type="" type="date" class="form-control"  name="telefono" id="exampleInputEmail1"  value="<?php echo $telefono; ?>" aria-describedby="emailHelp" placeholder="telefono">
                  <br>
                  <label for="exampleInputEmail1">nombre_empresa</label>
                  <input type="" type="date" class="form-control" name="nombre_empresa" id="exampleInputEmail1" value="<?php echo $nombre_empresa; ?>"aria-describedby="emailHelp" placeholder="nombre_empresa">
                  <br>
                  <label for="exampleInputEmail1">direccion_empresa</label>
                  <input type="" type="date" class="form-control" name="direccion_empresa"  id="exampleInputEmail1" value="<?php echo $direccion_empresa; ?>"aria-describedby="emailHelp" placeholder="direccion_empresa">
                  <br>
                  <label for="exampleInputEmail1">telefono_empresa</label>
                  <input type="" type="date" class="form-control" name="telefono_empresa"  id="exampleInputEmail1" value="<?php echo $telefono_empresa; ?>"  aria-describedby="emailHelp" placeholder="telefono_empresa">
                  <br>
<button class="btn btn-success btn-block" name="update">
          Actualizar
</button>
</form>
                      
</div>
     </div>

                

<?php include('includes/footer.php'); ?>
